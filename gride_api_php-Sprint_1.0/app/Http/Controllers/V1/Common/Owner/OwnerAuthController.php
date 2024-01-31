<?php

namespace App\Http\Controllers\V1\Common\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notification as NewPushNotification;
use App\Services\ReferralResource;
use App\Services\SendPushNotification; 
use App\Notifications\WebPushNotification;
use App\Models\Common\Owner;
use App\Models\Common\User;
use App\Models\Common\Setting;
use App\Models\Common\CompanyCity;
use App\Models\Common\CompanyCountry;
use App\Models\Common\Country;
use App\Models\Common\AuthLog;
use App\Models\Common\Admin;
use Illuminate\Http\Request;
use Tymon\JWTAuth\JWTAuth;
use App\Traits\Encryptable;
use Illuminate\Validation\Rule;
use App\Helpers\Helper;
use Carbon\Carbon;
use Notification;
use Auth;
use Illuminate\Support\Facades\DB;

class OwnerAuthController extends Controller
{
	protected $jwt;
	use Encryptable;

	public function __construct(JWTAuth $jwt)
	{
		$this->jwt = $jwt;
	}
	
	public function login(Request $request) {        				
		if($request->has('email')) {
            $request->merge([
                'email' => strtolower($request->email)
            ]);
		}        
		
		$this->validate($request, [
            'email'    => 'email|max:255',
            'password' => 'required',
            'salt_key' => 'required',
        ]);

       
        if($request->has('email') && $request->email != '') {
            $request->merge([
                'email' => $this->cusencrypt(strtolower($request->email),env('DB_SECRET'))            
            ]);
        }

		if($request->has('phone')) {
			$request->merge([
				'phone' => $this->cusencrypt($request->get('phone'),env('DB_SECRET'))            
			]);			
		}        		
		if(!$request->has('email') && !$request->has('phone')) {
            $this->validate($request, [
                'email'    => 'required|email|max:255',
                'phone' => 'required'
            ]);
        } else if(!$request->has('phone')) {
            $this->validate($request, [
                'email'    => ['required', 'max:255', Rule::exists('owners')]
            ]);
        } else if(!$request->has('email')) {
            $this->validate($request, [
                'phone' => ['required', Rule::exists('owners')],
            ],['phone.exists'=>'Please Enter a Valid Phone Number','email.exists'=>'Please Enter a Valid Email']);
        }

		try {

			$request->request->add(['company_id' => base64_decode($request->get('salt_key'))]);
			$request->request->remove('salt_key');			
			if($request->has('email') && $request->get('email') != '') {                                
                if (! $token = Auth::guard('owner')->attempt($request->only('email', 'password', 'company_id')) ) {
                    return Helper::getResponse(['status' => 422, 'message' => 'Invalid Credentials']);
                }
            } else {

				// Below old code is not working in some cases			
                // if (! $token = Auth::guard('provider')->attempt($request->only('country_code', 'mobile', 'password', 'company_id')) ) {					
                    // return Helper::getResponse(['status' => 422, 'message' => 'Invalid Credentials']);
                // }				
				$user = Owner::where(["phone" => $request->get('phone'),"company_id" => $request->get('company_id')])->first();				
				if (!empty($user)) {
						if (!Hash::check($request->get('password'), $user->password)) {
							return Helper::getResponse(['status' => 422, 'message' => 'Invalid Credentials']);
						} else {						
							$token = Auth::guard('owner')->login($user);						
						}
					// }else{
					// 	return Helper::getResponse(['status' => 422, 'message' => 'Please verify your email']);
					// }
				} else {
					return ['status' => 422, 'message' => 'User not found'];
				}				
            }

		} catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

			return Helper::getResponse(['status' => 500, 'message' => 'Token Expired']);

		} catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

			return Helper::getResponse(['status' => 500, 'message' => 'Token Invalid']);

		} catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

			return Helper::getResponse(['status' => 500, 'message' => $e->getMessage()]);

		}

		$User = Owner::find(Auth::guard('owner')->user()->id);
		if($User->status == 0){
            return Helper::getResponse(['status' => 422, 'message' => 'Account Disabled']);
        }
		$User->device_type = $request->get('device_type');
		$User->device_token = $request->get('device_token');
        $User->login_by = ($request->get('login_by') != null) ? $request->get('login_by') : 'MANUAL' ;
        $User->is_online = 1;
		$User->save();

		AuthLog::create(['user_type' => 'Owner', 'user_id' => \Auth::guard('owner')->id(), 'type' => 'login', 'data' => json_encode(
			['data' => [ $request->getMethod() =>  $request->getPathInfo(). " " . $request->getProtocolVersion(), 
			'host' => $request->getHost(), 
			'ip' => $request->getClientIp(), 
			'user_agent' => $request->userAgent(), 
			'date' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]]
		)]);

		$newUser = Owner::find($User->id);
		$newUser->jwt_token = $token;
		$newUser->save();
		return Helper::getResponse(['data' => ["token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => $token, 'user' => $newUser ]]);

		//return Helper::getResponse(['data' => ["token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => $token, 'user' => Auth::guard('owner')->user()]]);

	}

	public function signup(Request $request) {   
		if($request->has('email')) {
            $request->merge([
                'email' => strtolower($request->email)
            ]);
        }

		$this->validate($request, [
			'social_unique_id' => ['required_if:login_by,GOOGLE,FACEBOOK','unique:owners'],
			'device_type' => 'in:ANDROID,IOS',
			'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
			'phone' => 'required',
			'email' => 'required|email|max:255',
			'password' => ['required_if:login_by,MANUAL','min:6'],
			'salt_key' => 'required',
		]);

		$request->merge([
			'email' => $this->cusencrypt($request->email,env('DB_SECRET')),
			'phone' => $this->cusencrypt($request->phone,env('DB_SECRET')),
		]);

		$company_id=base64_decode($request->salt_key);
		$email=$request->email;
		$phone=$request->phone;
         
		$this->validate($request, [          
			'email' =>[ Rule::unique('owners')->where(function ($query) use($email,$company_id) {
							return $query->where('email', $email)->where('company_id', $company_id);
						 }),
					   ],
			'phone' =>[ Rule::unique('owners')->where(function ($query) use($phone,$company_id) {
							return $query->where('phone', $phone)->where('company_id', $company_id);
						 }),
					   ],
		],['email.unique'=>'User already registered with given email-Id!','phone.unique'=>'User already registered with given mobile number!']);
		

		$settings = json_decode(json_encode(Setting::where('company_id', base64_decode($request->salt_key))->first()->settings_data));

		$siteConfig = $settings->site;

		$transportConfig = $settings->transport;               

		// if($request->has('referral_code') && $request->referral_code != ""){
		// 	$validate['referral_unique_id']=$request->referral_code; 
		// 	$validate['company_id']=$company_id;         
		// 	$validator  = (new ReferralResource)->checkReferralCode($validate);        
		// 	if (!$validator->fails()) { 
		// 		$validator->errors()->add('referral_code', 'Invalid Referral Code');
		// 		throw new \Illuminate\Validation\ValidationException($validator);
		// 	}   
		// }

		//$referral_unique_id=(new ReferralResource)->generateCode($company_id);

		$request->merge([
			'email' => $this->cusdecrypt($request->email,env('DB_SECRET')),
			'phone' => $this->cusdecrypt($request->phone,env('DB_SECRET')),
		]);

		// $city = CompanyCity::where('city_id', $request->city_id)->first();
				
		// if($city == null) {
		// 	$validator = Validator::make([], [], []);
        //     $validator->errors()->add('city', 'City does not exist!');
        //     throw new \Illuminate\Validation\ValidationException($validator);
        // }

        //$country = CompanyCountry::where('company_id',$company_id)->first();

		$User = new Owner();
		$User->first_name = $request->first_name;
		$User->last_name = $request->last_name;
		$User->email = $request->email;
		$User->gender = $request->gender;
		$User->phone = $request->phone;
		$User->password = ($request->social_unique_id != null)  ? Hash::make($request->social_unique_id) : Hash::make($request->password) ;
		$User->company_id = base64_decode($request->salt_key);
		$User->device_type = $request->device_type;
		$User->device_token = $request->device_token;
		$User->login_by = ($request->login_by != null) ? $request->login_by : 'MANUAL' ;
		//$User->country_id = $request->country_id;
		$User->save();
		$createduser = Owner::findOrFail($User->id);
		if($request->hasFile('picture')) {
            $createduser->picture = Helper::upload_file($request->file('picture'), 'owner/profile', $User->id.'.'.$request->file('picture')->getClientOriginalExtension(), base64_decode($request->salt_key)); 
        }
        // $createduser->unique_id=$siteConfig->provider_unique_id.$User->id;
		// $createduser->qrcode_url = Helper::qrCode(json_encode(['phone_number' => $request->phone]), $User->id.'.png', base64_decode($request->salt_key));
		$createduser->save();

		AuthLog::create(['user_type' => 'Owner', 'user_id' => \Auth::guard('owner')->id(), 'type' => 'login', 'data' => json_encode(
			['data' => [ $request->getMethod() =>  $request->getPathInfo(). " " . $request->getProtocolVersion(), 
			'host' => $request->getHost(), 
			'ip' => $request->getClientIp(), 
			'user_agent' => $request->userAgent(), 
			'date' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]]
		)]);

		$request->request->add(['company_id' => base64_decode($request->salt_key)]);  
			$request->request->remove('salt_key');

		$request->merge([
			'email' => $this->cusencrypt($request->email,env('DB_SECRET'))            
		]);   

		$credentials = ['email' => $request->email, 'password' => ($request->social_unique_id != null)  ? $request->social_unique_id : $request->password, 'company_id' => $User->company_id];
			
		$token = Auth::guard('owner')->login($User);

		//if( !empty($siteConfig->send_email) && $siteConfig->send_email == 1) {
			// send welcome email here 
		//	Helper::siteRegisterMail($User);
		//}    

		//check user referrals
		if( !empty($siteConfig->referral) && $siteConfig->referral == 1) {
			if($request->referral_code){
				//call referral function
				(new ReferralResource)->create_referral($request->referral_code, $User, $settings, 'owner');                
			}
		}

		$newUser = Owner::find($User->id); 
		$newUser->jwt_token = $token;	
		$newUser->save(); 

		return Helper::getResponse(['data' => ["token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => $token, 'user' => $newUser]]);
	}

	public function refresh(Request $request) {

		Auth::guard('owner')->setToken(Auth::guard('owner')->getToken());

		return Helper::getResponse(['data' => [
				"token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => Auth::guard('owner')->refresh()
			]]);
	}


	public function logout(Request $request) {
		try {

			$User = Owner::find(\Auth::guard('owner')->id() );
			$User->is_online = 0;
			$User->jwt_token = null;			
			$User->device_token = null;
			$User->device_id = null;
			$User->device_type = null;
			$User->save();

			Auth::guard('owner')->setToken(Auth::guard('owner')->getToken());
			
			Auth::guard('owner')->invalidate();

			AuthLog::create(['user_type' => 'Owner', 'user_id' => \Auth::guard('owner')->id(), 'type' => 'logout', 'data' => json_encode(
				['data' => [ $request->getMethod() =>  $request->getPathInfo(). " " . $request->getProtocolVersion(), 
				'host' => $request->getHost(), 
				'user_agent' => $request->userAgent(), 
				'date' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')]]
			)]);

			return Helper::getResponse(['message' => 'Successfully logged out']);

		} catch (JWTException $e) {

			return Helper::getResponse(['status' => 403, 'message' => $e->getMessage()]);
		}
	}

	public function forgotPasswordOTP(Request $request){
        $account_type = isset($request->account_type)?$request->account_type:'';
        if($account_type =='mobile'){
            $response =  $this->forgotPasswordMobile($request);
        }else{
            $response = $this->forgotPasswordEmail($request);
        }
        return $response;
    }

    public function forgotPasswordEmail($request) {
        $this->validate($request, [
            'email' => 'required|email|max:255',
            'salt_key' => 'required',
        ]);
        $emaildata['username'] = $toEmail = isset($request->email)?$request->email:'';
        $emaildata['account_type'] = isset($request->account_type)?$request->account_type:'';
        try {
            $request->merge([
                'email' => $this->cusencrypt($request->email,env('DB_SECRET'))            
            ]);
            $request->request->add(['company_id' => base64_decode($request->salt_key)]);
            $request->request->remove('salt_key');
            $settings = json_decode(json_encode(Setting::where('company_id', $request->company_id)->first()->settings_data));
            $siteConfig = $settings->site;            
            $otp = mt_rand(100000, 999999);
            $userQuery = Owner::where('email' , $request->email)->first();
            //User Not Exists
            $validator  = Validator::make([],[],[]);
            if($userQuery == null) {
                $validator->errors()->add('phone', 'Owner not found');
                throw new \Illuminate\Validation\ValidationException($validator); 
            }
            $userQuery->otp = $otp;
            $userQuery->save();
            $emaildata['otp'] = $otp;
            if( !empty($siteConfig->send_email) && $siteConfig->send_email == 1) {
                
                //  SEND OTP TO MAIL
					$subject='Forgot|OTP';
					$templateFile='mails/forgotpassmail';
                    $data=['body'=>$otp,'username'=>$userQuery->first_name,'salt_key'=>$request->company_id];
                    $result= Helper::send_emails($templateFile,$toEmail,$subject, $data);
                                  
                 
            }else{
                $errMessage = 'Mail configuration disabled';
            }
            return Helper::getResponse(['status' => 200, 'message'=>'success','data'=>$emaildata]);              
        }catch (Exception $e){
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
    }

    public function forgotPasswordMobile($request) {
        $this->validate($request, [
            'phone' => 'required|numeric|min:6',
            'country_code' => 'required',
        ]);
        try {
            $smsdata['country_code'] = isset($request->country_code)?$request->country_code:'';
            $smsdata['username'] = isset($request->phone)?$request->phone:'';
            $smsdata['account_type'] = isset($request->account_type)?$request->account_type:'';
            $plusCodeMobileNumber = '+'. $smsdata['country_code'].$smsdata['username'];
            $request->merge([
                'phone' => $this->cusencrypt($request->phone,env('DB_SECRET'))            
            ]);
            $request->request->add(['company_id' => base64_decode($request->salt_key)]);
            $request->request->remove('salt_key');
            $settings = json_decode(json_encode(Setting::where('company_id', $request->company_id)->first()->settings_data));
            $siteConfig = $settings->site; 
            $companyId = $request->company_id;
            $otp = mt_rand(100000, 999999);
            $userQuery = Owner::where('phone' , $request->mobile)->first();
            //User Not Exists
            $validator  = Validator::make([],[],[]);
            if($userQuery == null) {         
                $validator->errors()->add('phone', 'Owner not found');
                throw new \Illuminate\Validation\ValidationException($validator); 
            }
            $userQuery->otp = $otp;
            $saveQuery = $userQuery->save();
            if($saveQuery){
                $smsdata['otp'] = $otp;
                $smsMessage ='Your Otp to reset password is '.$otp;
                if( !empty($siteConfig->send_sms) && $siteConfig->send_sms == 1) {
                    // send OTP SMS here            
                    $result= Helper::send_sms($companyId,$plusCodeMobileNumber, $smsMessage);
                    $smsdata['smsresult']=$result;
                }else{
                    $errMessage = 'SMS configuration disabled';
                }
                return Helper::getResponse(['status' => 200, 'message'=>'success','data'=>$smsdata]);              
            }else{
                $errMessage =trans('admin.something_wrong');
            }            
        }catch (Exception $e){
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }   
        return Helper::getResponse(['status' => 404, 'message' => $errMessage]);            
    }

    public function resetPasswordOTP(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'otp' => 'required',
            //'account_type' => 'required',
            'password' => 'required|min:6|confirmed|max:36',
        ]);
        $responseData=$request->all();
        try {
            //$account_type = isset($request->account_type)?$request->account_type:'';
            $username = isset($request->username)?$request->username:'';
            $newpassword = isset($request->password)?$request->password:'';
            $otp = isset($request->otp)?$request->otp:'';
            $request->merge([
                'loginUser' => $this->cusencrypt($username,env('DB_SECRET'))            
            ]);

            $account_type = $request->account_type;
            if($account_type =='phone'){
                $where = ['phone'=>$request->loginUser];
            }else{
                $where = ['email'=>$request->loginUser];
            }
            $userQuery = Owner::where($where)->first();
                //User Not Exists
            $validator  = Validator::make([],[],[]);
            if($userQuery == null) {         
                $validator->errors()->add('Result', 'User not found');
                throw new \Illuminate\Validation\ValidationException($validator); 
            }else{
                $dbOtpCode = $userQuery->otp;
                if($dbOtpCode != $otp){
                    $validator->errors()->add('Result', 'Invalid Credentials');
                    throw new \Illuminate\Validation\ValidationException($validator);
                }
                $enc_newpassword = Hash::make($newpassword);
                $input =['password' => $enc_newpassword];
				$userQuery->password = $enc_newpassword;
				$userQuery->login_by = 'MANUAL';
                //$userQuery->social_unique_id = NULL;
                $userQuery->otp = 0;
                $userQuery->save();
            }
            return Helper::getResponse(['status' => 200, 'message'=>'Password changed successfully','data'=>$responseData]);              
        }catch (Exception $e){
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }            
    }

    public function verify(Request $request) {

        if($request->has('email')) {
            $request->merge([
                'email' => strtolower($request->email)
            ]);
        }

        $this->validate($request, [
            'phone' => 'sometimes',
            'email' => 'sometimes|email|max:255',
            'salt_key' => 'required',
        ]);
    
        $company_id=base64_decode($request->salt_key);

        if($request->has('email')) {

            $request->merge([                
                'email' => $this->cusencrypt($request->email,env('DB_SECRET')),
            ]);

            $email=$request->email;

            $this->validate($request, [          
                'email' =>[ Rule::unique('owners')->where(function ($query) use($email,$company_id) {
                                return $query->where('email', $email)->where('company_id', $company_id);
                             }),
                           ],
                
            ],['email.unique'=>'Owner already registered with given email-Id!']);
        }    

        if($request->has('phone')) {

            $request->merge([            
                'phone' => $this->cusencrypt($request->phone,env('DB_SECRET')),
            ]);

            $phone=$request->phone;

            $this->validate($request, [
                'phone' =>[ Rule::unique('owners')->where(function ($query) use($mobile,$company_id) {
                                return $query->where('phone', $phone)->where('company_id', $company_id);
                             }),
                           ],
            ],['phone.unique'=>'User already registered with given mobile number!']);
        }

        return Helper::getResponse();
    }

    public function switchtouser(){
        
        $user = Auth::guard('owner')->user();

        $phone = $this->cusencrypt($user->phone,env('DB_SECRET'));
        $email = $this->cusencrypt($user->email,env('DB_SECRET'));


        $email_case = User::where('email', $email)->where('country_code', '1')->where('mobile', $phone)->first();

        $registeredEmail = User::where('email', $email)->where('user_type', 'INSTANT')->first();
        $registeredMobile = User::where('country_code', '1')->where('mobile', $phone)->where('user_type', 'INSTANT')->first();

        $registeredEmailNormal = User::where('email', $email)->where('user_type', 'NORMAL')->first();
        $registeredMobileNormal = User::where('country_code', '1')->where('mobile', $phone)->where('user_type', 'NORMAL')->first();

        $validator  = Validator::make([],[],[]);

        $currentUser = null;

        $isExist = false;
        if($registeredEmail != null && $registeredMobile != null) {
            //User Already Registerd with same credentials
            if($registeredEmail != null) {       
                $isExist = true;
            } else if($registeredMobile != null) {       
                $isExist = true;
            }

        } else {
            if($registeredEmail != null) $currentUser = $registeredEmail;
            else if($registeredMobile != null) $currentUser = $registeredMobile;
        }

        if($registeredEmailNormal != null) {
            $isExist = true; 
        }

        if($registeredMobileNormal != null) {
            $isExist = true;
        } 

        
        if($isExist){
            $token = app()->call('App\Http\Controllers\V1\Common\User\UserAuthController@logintouser',[$user->user_id]);
            
            $newUser = User::find($user->user_id);
            $newUser->jwt_token = $token;
            $newUser->save();

            return Helper::getResponse(['data' => ["token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => $token, 'user' => $newUser]]);
        }


        $country = CompanyCountry::where('company_id',$user->company_id)->where('country_id', '1')->first();

        // $country = Country::find($request->country_id);

        if($currentUser == null) {
            $User = new User();
        } else {
            $User = $currentUser;
        }

        $referral_unique_id=(new ReferralResource)->generateCode($user->company_id);

        $User->first_name = $user->first_name;
        $User->last_name = $user->last_name;
        $User->email = $user->email;
        $User->gender = $user->gender;
        $User->country_code = 1;
        $User->mobile = $user->phone;
        $User->password = ($user->social_unique_id != null)  ? Hash::make($user->social_unique_id) : $user->password ;
        $User->payment_mode = 'CASH';
        $User->picture = $user->picture;
        $User->user_type = 'NORMAL';
        $User->referral_unique_id = $referral_unique_id;
        $User->company_id = base64_decode('MQ==');
        $User->owner_id = $user->id;
        $User->device_type = null;
        $User->device_token = null;
        $User->social_unique_id = null ;
        $User->login_by = 'MANUAL' ;
        $User->currency_symbol = '$';
        $User->country_id = 231;
        $User->state_id = 821;
        $User->city_id = 48328;
        $User->save();

        $settings = json_decode(json_encode(Setting::where('company_id', base64_decode('MQ=='))->first()->settings_data));
                
        $siteConfig = $settings->site;

        $User->unique_id=$siteConfig->user_unique_id.$User->id;
        $User->qrcode_url = Helper::qrCode(json_encode(["country_code" => '1', 'phone_number' => $user->phone, 'id' => base64_encode($User->unique_id)]), $User->id.'.png', base64_decode('MQ=='));

        $User->save();

        $credentials = ['email' => $this->cusencrypt($User->email,env('DB_SECRET')) , 'password' => $user->password, 'company_id' => $User->company_id];

        
        $token = app()->call('App\Http\Controllers\V1\Common\User\UserAuthController@switchtouser',[$User]);


        $newUser = User::find($User->id);
        $newUser->jwt_token = $token;
        $newUser->save();

        return Helper::getResponse(['data' => ["token_type" => "Bearer", "expires_in" => (config('jwt.ttl', '0') * 60), "access_token" => $token, 'user' => $newUser]]);
    }

    public function logintoowner($id){
    	$user = Owner::find($id);				
		if (!empty($user)) {
									
			$token = Auth::guard('owner')->login($user);

			return $token;						
				
		} else {
			return ['status' => 422, 'message' => 'Owner not found'];
		}
    }

}
