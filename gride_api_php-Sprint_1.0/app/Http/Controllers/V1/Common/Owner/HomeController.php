<?php

namespace App\Http\Controllers\V1\Common\Owner;

use Illuminate\Support\Facades\Notification as PushNotification;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Common\Setting;
use App\Models\Common\Menu;
use App\Models\Common\Owner;
use Illuminate\Support\Facades\Hash;
use App\Models\Common\Reason;
use App\Models\Common\Notifications;
use App\Models\Common\Promocode;
use App\Models\Common\UserRequest;
use App\Models\Common\AdminService;
use App\Models\Common\Chat;
use App\Models\Common\S3Storage;
use App\Models\Common\Howitworks;
use App\Services\SendPushNotification;
use App\Helpers\Helper;
use Carbon\Carbon;
use Auth;
use App\Traits\Encryptable;
use Illuminate\Validation\Rule;
use App\Services\ReferralResource;
use Illuminate\Support\Facades\Storage;
use Notification;
use App\Notifications\WebPushNotification;
use App\Models\Common\Admin;

class HomeController extends Controller
{
	use Encryptable;


	public function index(Request $request) {

		$user = Auth::guard('owner')->user();

        $company_id = $user ? $user->company_id : 1;

        $city_id = $user ? $user->city_id : $request->city_id;        

        $menus= new \stdClass;

        $menus->services = Menu::with('service')->whereHas('service' ,function($query){  
            $query->where('status',1);  
        })->whereHas('cities', function ($query) use($user, $city_id) {
			$query->where('city_id', $city_id);
		})->where('company_id', $company_id)->where('status',1)->orderby('sort_order')->get();        
        $menus->promocodes = Promocode::with('services')->whereHas('services' ,function($query){  
                                $query->where('status',1);  
                            })->where('company_id', $company_id)
                            ->where('expiration','>=',date("Y-m-d H:i"))
                            ->whereDoesntHave('promousage', function($query) use ($user) {
                                        $query->where('user_id',$user ? $user->id : 0);
                                    })
                            ->get();        
        return Helper::getResponse(['data' => $menus]);
	}

 

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Provider  $provider
	 * @return \Illuminate\Http\Response
	 */
	public function show_profile()
	{
		$user_details = Owner::where('id',Auth::guard('owner')->user()->id)->where('company_id',Auth::guard('owner')->user()->company_id)->first();

		$settings = json_decode(json_encode(Setting::where('company_id', Auth::guard('owner')->user()->company_id)->first()->settings_data));
		return Helper::getResponse(['data' => $user_details]);
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Provider  $provider
	 * @return \Illuminate\Http\Response
	 */
	public function update_profile(Request $request)
	{

           if($request->has('phone')) {
                $request->merge([
                'phone' => $this->cusencrypt($request->phone,env('DB_SECRET')),
                ]);
                 $mobile=$request->phone;
                 $company_id=Auth::guard('owner')->user()->company_id;
                 $id=Auth::guard('owner')->user()->id;

               $this->validate($request, [          
               'phone' =>[ Rule::unique('owners')->where(function ($query) use($mobile,$company_id,$id) {
                            return $query->where('phone', $mobile)->where('company_id', $company_id)->whereNotIn('id', [$id]);
                         }),
                       ],
              ]);

             $request->merge([
                'phone' => $this->cusdecrypt($request->phone,env('DB_SECRET')),
            ]); 

			}

            


		try{
            $user = Owner::where('id',Auth::guard('owner')->user()->id)->where('company_id',Auth::guard('owner')->user()->company_id)->first();

			$user->first_name = $request->first_name;
			if($request->has('last_name')) {
				$user->last_name = $request->last_name;
			}
			if($request->has('email')) {
				$user->email = $request->email;
			}

			
			if($request->has('phone')) {
				$user->phone = $request->phone;
			}
			
			if($request->has('gender')) {
               $user->gender = $request->gender;
			}

            if($request->picture == "no_image"){
                $user->picture="";
            }

			if($request->hasFile('picture')) {

                $user->picture = Helper::upload_file($request->file('picture'), 'owner/profile', null, Auth::guard('owner')->user()->company_id);
			}

            $user->qrcode_url = Helper::qrCode(json_encode(["country_code" => '1', 'phone_number' => $user->phone, 'id' => base64_encode($user->unique_id)]), $user->id.'.png', $user->company_id );

			$user->save();
			return Helper::getResponse(['status' => 200, 'message' => trans('admin.update'), 'data' => $user]);
		}
        catch (\Throwable $e) {
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Provider  $provider
	 * @return \Illuminate\Http\Response
	 */
	public function password_update(Request $request) 
	{
		$this->validate($request,[
			'old_password' => 'required',
			'password' => 'required|min:6|different:old_password',
            'password_confirmation' => 'required'
		],['password.different'=>'The new password and old password should not be same']);

		try {

			$User =Owner::where('id',Auth::guard('owner')->user()->id)->where('company_id',Auth::guard('owner')->user()->company_id)->first();
			if(password_verify($request->old_password, $User->password))
			{
				$User->password = Hash::make($request->password);
				$User->save();
                return Helper::getResponse(['status' => 200, 'message' => trans('admin.update')]);
            }else{
                return Helper::getResponse(['status' => 422, 'message' => trans('admin.old_password_incorrect')]);
            }
            
		}  catch (\Throwable $e) {
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
	}

    public function ach_update(Request $request) 
    {
        $this->validate($request,[
            'routing_no' => 'required',
            'account_number' => 'required',
            'confirm_account_number' => 'required'
        ]);

        try {

            $User =Owner::where('id',Auth::guard('owner')->user()->id)->where('company_id',Auth::guard('owner')->user()->company_id)->first();

            $stripe = new \Stripe\StripeClient('sk_test_jAd3vACQvcTtOEAfNpOC5HYz00sctdt8VA');

            $custID = Auth::guard('owner')->user()->stripe_cust_id;
            
            if($custID=='')
            {
                $customer=$stripe->customers->create([
                        'description' => Auth::guard('owner')->user()->first_name.' '.Auth::guard('owner')->user()->last_name,
                    ]);
                $custID=$customer->id;
                //update user's customer id

                $usersinfo = Owner::findorFail(Auth::guard('owner')->user()->id);
                $usersinfo->stripe_cust_id = $custID;
                $usersinfo->save();

            }

            $bank = $stripe->customers->createSource(
              $custID,
              ['source' => [
                        'object' => 'bank_account',
                        'country' => 'US',
                        'currency' => 'usd',
                        'account_number' => $request->account_number,
                        'routing_number'=> $request->routing_no,
                        'account_holder_type'=> 'individual',
                        'account_holder_name' => Auth::guard('owner')->user()->first_name.' '.Auth::guard('owner')->user()->last_name
              ]]
            );
            
                $User->account_number = $request->account_number;
                $User->routing_number = $request->routing_no;
                $User->payment_method = $bank->id;
                $User->save();
                return Helper::getResponse(['status' => 200, 'message' => $bank]);
           
        }  catch (\Throwable $e) {
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
    }

	public function addcard(Request $request)
	{
		$this->validate($request,[
			'stripe_token' => 'required', 
		]);

		try{

            $customer_id = $this->customer_id();            
            $this->set_stripe();
            $customer = \Stripe\Customer::retrieve($customer_id);
            
            $card = $customer->sources->create(["source" => $request->stripe_token]);            
            $user = Auth::guard('user')->user();

            $exist = Card::where('user_id', $user->id)
                            ->where('last_four',$card->last4)
                            ->where('brand',$card->brand)
                            ->count();

            if($exist == 0){
                $create_card = new Card;
                $create_card->user_id = $user->id;
                $create_card->card_id = $card->id;
                $create_card->last_four = $card->last4;
                $create_card->brand = $card->brand;
                $create_card->company_id = $user->company_id;
                $create_card->month = $card->exp_month;
				$create_card->year = $card->exp_year;
				$create_card->holder_name = $card->name;
				$create_card->funding = $card->funding;
                $create_card->save();
            }else{
                return Helper::getResponse(['status' => 403, 'message' => trans('api.card_already')]);     
            }

            return Helper::getResponse(['status' => 200, 'data'=> $create_card, 'message' => trans('api.card_added')]); 

        } catch(Exception $e){
            return Helper::getResponse(['status' => 500, 'error' => $e->getMessage()]);
        }
	}
	
	public function carddetail(Request $request)
	{
		$cards = Card::where('user_id',Auth::guard('user')->user()->id)->where('company_id',Auth::guard('user')->user()->company_id)->get();
		return Helper::getResponse(['data' => $cards]);	
	}

	public function deleteCard(Request $request,$id)
    {
        $card = Card::where('id', $id)->first();
        if($card){
            try {
		        Card::where('id',$id)->delete();
                return Helper::getResponse(['status' => 200, 'message' => 'Card Deleted']);
            }catch (Exception $e) {
				return Helper::getResponse(['status' => 422, 'message' => 'Card Not Found', 'error' => $e->getMessage()]);
			}
        }else{
            return Helper::getResponse(['status' => 422, 'message' => 'Card Not Found']);
        }
	}

	/**
     * setting stripe.
     *
     * @return \Illuminate\Http\Response
     */
    public function set_stripe(){

        $settings = json_decode(json_encode(Setting::where('company_id', Auth::guard('user')->user()->company_id)->first()->settings_data));

        $paymentConfig = json_decode( json_encode( $settings->payment ) , true);

        $cardObject = array_values(array_filter( $paymentConfig, function ($e) { return $e['name'] == 'card'; }));
        $card = 0;

        $stripe_secret_key = "";
        $stripe_publishable_key = "";
        $stripe_currency = "";

        if(count($cardObject) > 0) { 
            $card = $cardObject[0]['status'];

            $stripeSecretObject = array_values(array_filter( $cardObject[0]['credentials'], function ($e) { return $e['name'] == 'stripe_secret_key'; }));
            $stripePublishableObject = array_values(array_filter( $cardObject[0]['credentials'], function ($e) { return $e['name'] == 'stripe_publishable_key'; }));
            $stripeCurrencyObject = array_values(array_filter( $cardObject[0]['credentials'], function ($e) { return $e['name'] == 'stripe_currency'; }));

            if(count($stripeSecretObject) > 0) {
                $stripe_secret_key = $stripeSecretObject[0]['value'];
            }

            if(count($stripePublishableObject) > 0) {
                $stripe_publishable_key = $stripePublishableObject[0]['value'];
            }

            if(count($stripeCurrencyObject) > 0) {
                $stripe_currency = $stripeCurrencyObject[0]['value'];
            }
        }


        return \Stripe\Stripe::setApiKey( $stripe_secret_key );
    }

    /**
     * Get a stripe customer id.
     *
     * @return \Illuminate\Http\Response
     */
    public function customer_id()
    {
        if(Auth::guard('user')->user()->stripe_cust_id != null){
            return Auth::guard('user')->user()->stripe_cust_id;
        }else{

            try{ 
                $stripe = $this->set_stripe();
                $customer = \Stripe\Customer::create([
                    'email' => Auth::guard('user')->user()->email,
                ]);

                User::where('id',Auth::guard('user')->user()->id)->update(['stripe_cust_id' => $customer['id']]);
                return $customer['id'];

            } catch(Exception $e){
                return $e;
            }
        }
	}
	public function userlist(){

		$user_list = User::where('id',Auth::guard('user')->user()->id)->where('company_id',Auth::guard('user')->user()->company_id)->with('country')->first();
        $user_list->makeVisible(['qrcode_url']);
		return Helper::getResponse(['data' => $user_list]);
	}
	public function walletlist(Request $request)
	{
        if($request->has('limit')) {
            $user_wallet = UserWallet::select('id', 'transaction_id', 'transaction_desc','transaction_alias', 'type', 'amount','created_at')->with(['payment_log' => function($query){  $query->select('id','company_id','is_wallet','user_type','payment_mode','user_id','amount','transaction_code'); }])
            ->where('company_id',Auth::guard('user')->user()->company_id)->where('user_id',Auth::guard('user')->user()->id)->orderBy('created_at','desc');
            $totalRecords = $user_wallet->count();
            $user_wallet = $user_wallet->take($request->limit)->offset($request->offset)->get();
            $response['total_records'] = $totalRecords;
            $response['data'] = $user_wallet;
            return Helper::getResponse(['data' => $response]);
        } else {
            $user_wallet = UserWallet::select('id','user_id', 'transaction_id','transaction_alias', 'transaction_desc', 'type', 'amount','created_at')->with(['payment_log' => function($query){  $query->select('id','company_id','is_wallet','user_type','payment_mode','user_id','amount','transaction_code'); },'user'=>function($query){
                $query->select('id','currency_symbol');
            }])->where('company_id',Auth::guard('user')->user()->company_id)->where('user_id',Auth::guard('user')->user()->id);
                    if($request->has('search_text') && $request->search_text != null) {
                        $user_wallet->Search($request->search_text);
                    }

                    if($request->has('order_by')) {
                        $user_wallet->orderby($request->order_by, $request->order_direction);
                    }
                    $user_wallet=$user_wallet->orderBy('created_at','desc')->paginate(10); 
        }

        return Helper::getResponse(['data' => $user_wallet]);
	}
	public function order_status(Request $request){ 

		$order_status = UserRequest::where('user_id',Auth::guard('user')->user()->id)
						->whereNotIn('status',['CANCELLED','SCHEDULED'])->get();
		return Helper::getResponse(['data' => $order_status]);
	}

	public function countries(Request $request) {
        $company_id = base64_decode($request->salt_key);
        $country_list = CompanyCountry::with(['companyCountryCities' => function($q) use($company_id) {  $q->where('company_id', $company_id); }])->has('companyCountryCities')->where('company_id', $company_id )->where('status', 1)->get();
        $countries = [];
        foreach ($country_list as $country) {
            $object = new \stdClass();
            $object->id = $country->country->id;
            $object->country_name = $country->country->country_name;
            $object->country_code = $country->country->country_code;
            $object->country_phonecode = $country->country->country_phonecode;
            $object->country_currency = $country->country->country_currency;
            $object->country_symbol = $country->country->country_symbol;
            $object->status = $country->country->status;
            $object->timezone = $country->country->timezone;
            foreach ($country->companyCountryCities as $value) {
                $object->city[] = $value->city;
            }
            $countries[] = $object;
        }

        return Helper::getResponse(['data' => $countries]);
    }

    public function cities(Request $request)
    {
        $user = \Auth::guard('user')->user();
        $company_id = $user ? $user->company_id : 1;

        $settings = json_decode(json_encode(Setting::where('company_id', $company_id)->first()->settings_data));

        $country_id = $user ? $user->country_id : $settings->site->country;


        $company_cities = CompanyCity::where('company_id', $company_id)->where('country_id', $country_id)->pluck('city_id')->all();


        $cities = City::whereIn('id',$company_cities)->get();
        return Helper::getResponse(['data' => $cities]);
    }

    public function states()
    {
      
        $states = State::where('country_id','231')->get();
        return Helper::getResponse(['data' => $states]);
    }


    //Search City Controller
    public function searchcities(Request $request)
    {
        $user = \Auth::guard('user')->user();
        $company_id = $user ? $user->company_id : 1;

        $settings = json_decode(json_encode(Setting::where('company_id', $company_id)->first()->settings_data));

        $country_id = $user ? $user->country_id : $settings->site->country;


        $company_cities = CompanyCity::where('company_id', $company_id)->where('country_id', $country_id)->pluck('city_id')->all();


        $search_city = City::whereIn('id',$company_cities)->where('city_name', 'LIKE', '%' . $request->city . '%')->get();
        

        $response = array();

        foreach($search_city as $city)
        {
            $response[] = array("value" => $city->id,"label" => $city->city_name);
        }
         return json_encode($response);
        // return Helper::getResponse(['data' => $search_city]);
    }

    public function promocode(Request $request)
    {
        $user = \Auth::guard('user')->user();
        $company_id = $user ? $user->company_id : 1;

        $settings = json_decode(json_encode(Setting::where('company_id', $company_id)->first()->settings_data));

        $country_id = $user ? $user->country_id : $settings->site->country;

        $promocode = Promocode::with('service')->whereHas('service' ,function($query){  
                                $query->where('status',1);  
                            })->where('company_id',$company_id)->whereDate('expiration','>=',Carbon::today())->orderby('id','desc')->get();
       
        return Helper::getResponse(['data' => $promocode]);
    }

    public function reasons(Request $request)
    {
        $reason = Reason::where('company_id', Auth::guard('user')->user()->company_id)->where('service', $request->type)
                    ->where('type', 'USER')
                    ->where('status','active')
                    ->get();

        return Helper::getResponse(['data' => $reason]);
    }

    public function notification(Request $request)
    {
        try{
            $timezone=(Auth::guard('user')->user()->state_id) ? State::find(Auth::guard('user')->user()->state_id)->timezone : '';            
            $jsonResponse = [];
            if($request->has('limit')) {
                $notifications = Notifications::where('company_id', Auth::guard('user')->user()->company_id)
                                ->where('notify_type','!=', "provider")->where('status','active')
                                ->where('user_id',Auth::guard('user')->user()->id)->where('user_type',1)
                                ->whereDate('expiry_date','>=',Carbon::today())
                                ->take($request->limit)->offset($request->offset)->orderby('id','desc')->get();                
            }else{
                $notifications = Notifications::where('company_id', Auth::guard('user')->where('notify_type','!=', "provider")->user()->company_id)->where('user_type',1)->where('user_id',Auth::guard('user')->user()->id)->where('notify_type','!=', "provider")->where('status','active')->whereDate('expiry_date','>=',Carbon::today())->orderby('id','desc')->paginate(10); 
            }            
            if(count($notifications) > 0){
                foreach($notifications as $k=>$val){
                    // echo '<pre>';print_r($val);exit;
                  $notifications[$k]['created_at']=(\Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$val['created_at'], 'UTC'))->setTimezone($timezone)->format('Y-m-d H:i:s');    
                } 
            }             


            $jsonResponse['total_records'] = count($notifications);
            $jsonResponse['notification'] = $notifications;
        }catch (Exception $e) {
            return response()->json(['error' => trans('api.something_went_wrong')]);
        }
        return Helper::getResponse(['data' => $jsonResponse]);
    }
	
	public function search_user(Request $request){
		$results=array();
		$term =  $request->input('stext');  
        $queries = User::where('company_id', Auth::user()->company_id)
                    ->where(function ($query) use($term) {
                        $query->where('first_name', 'LIKE', $term.'%')
                            ->orWhere('last_name', 'LIKE', $term.'%');
                    })->take(5)->get();
		foreach ($queries as $query)
		{
			$results[]=$query;
		}    
		return response()->json(array('success' => true, 'data'=>$results));
    }
    public function city(Request $request)
    {
        try{ 

            $user = Auth::guard('user')->user();

            $company_id = $user ? $user->company_id : 1;

            if($user) {
                $city_update = User::where('company_id', $company_id)
                            ->where('id', Auth::guard('user')->user()->id)
                            ->update(['city_id' => $request['city_id']]);
            }
                
                return Helper::getResponse(['status' => 200, 'message' => 'Updated Successfully']);
            }catch (\Throwable $e) {
                    return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
            }  
    }
    public function citybyid(Request $request)
    {
        try{ 

            $city = City::where('id','=',$request['city_id'])->first();
            return Helper::getResponse(['status' => 200,'data'=>$city]);
            }catch (\Throwable $e) {
                    return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
            }  
    }

    public function defaultcard(Request $request)
    {  
      try{ 
           $card=Card::where('card_id',$request->card_id)->get();
            if(count($card) > 0){   
                Card::where('user_id',Auth::guard('user')->user()->id)->update(['is_default'=>0]);
                Card::where('card_id',$request->card_id)->update(['is_default'=>1]);

                return Helper::getResponse(['status' => 200, 'message' => trans('admin.update')]);
            }else{
                return Helper::getResponse(['status' => 200, 'message' => "Card Not Exist"]);
            } 

        }
        catch (\Throwable $e) {
            return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
    }

    public function listpromocode($service=null) {

        $type=strtoupper($service);

        $user = Auth::guard('user')->user();

        $company_id = $user ? $user->company_id : 1;
        
        $promocodes = Promocode::where('company_id', $company_id)->where('service',$type)->get();

        return Helper::getResponse(['data' => $promocodes]); 
    }

    public function get_chat(Request $request) {

        $this->validate($request,[
            'admin_service' => 'required|in:TRANSPORT,ORDER,SERVICE', 
            'id' => 'required', 
        ]);

        $chat=Chat::where('admin_service', $request->admin_service)->where('request_id', $request->id)->where('company_id', Auth::guard('user')->user()->company_id)->get();

        return Helper::getResponse(['data' => $chat]);
    }

    public function updateDeviceToken(Request $request){
        $this->validate($request,[
            'device_token' => 'required'
        ]);
        try{
            $company_id = Auth::guard('user')->user()->company_id;
            $user_id = Auth::guard('user')->user()->id;
            $update = User::where('id',$user_id)->update(['device_token'=>$request->device_token]);
            if($update){
                return Helper::getResponse(['status' => 200, 'message' => trans('admin.update')]);
            }else{
                return Helper::getResponse(['status' => 404, 'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
            }
        }catch (ModelNotFoundException $e) {
            return Helper::getResponse(['status' => 500,'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
    }

    public function wallet_transfer(Request $request){
        $this->validate($request, [
            'amount' => 'required|max:10',
            'id' => 'required_without:mobile',
            'mobile' => 'required_without:id',
        ]);
  
        try{

            if(Auth::guard('user')->user()->unique_id == $request->id || Auth::guard('user')->user()->mobile == $request->mobile ) {
                return Helper::getResponse(['status' => 422,'message' => trans('user.wallet_same')]);
            }

            if($request->amount <= 0){
                return Helper::getResponse(['status' => 422,'message' => trans('user.lesser_amount')]);
            }

            $sender = User::where('id', Auth::guard('user')->user()->id)->first();
            $request->merge([
            'mobile' => $this->cusencrypt($request->mobile,env('DB_SECRET')),
            ]);
            
            $unique_id = $request->id;
            $mobile = $request->mobile;
            $receiver = User::where(function($query) use ($unique_id, $mobile)
                                    {
                                        $query->where('unique_id', $unique_id)
                                              ->orWhere('mobile',$mobile);
                                    })->first();
           
            if(!empty($receiver)){
            if($sender->wallet_balance < $request->amount) {
                return Helper::getResponse(['status' => 422,'message' => trans('user.wallet_lesser_amount')]);
            }

            $user_data=UserWallet::orderBy('id', 'DESC')->first();
            if(!empty($user_data))
                $transaction_id=$user_data->id+1;
            else
                $transaction_id=1;

            $senderWallet=new UserWallet;
            $senderWallet->user_id=$sender->id;
            $senderWallet->company_id=$sender->company_id;
            $senderWallet->transaction_id=$transaction_id;        
            $senderWallet->transaction_alias='USR'.str_pad($transaction_id, 6, 0, STR_PAD_LEFT);
            $senderWallet->transaction_desc=trans('api.transaction.wallet_transfer');
            $senderWallet->type='D';
            $senderWallet->amount=$request->amount;        

            if(empty($sender->wallet_balance))
                $senderWallet->open_balance=0;
            else
                $senderWallet->open_balance=$sender->wallet_balance;

            if(empty($sender->wallet_balance))
                $senderWallet->close_balance=$request->amount;
            else            
                $senderWallet->close_balance=$sender->wallet_balance+$request->amount;

            $senderWallet->save();
      
            $sender->wallet_balance = $sender->wallet_balance - $request->amount;
            $sender->save();

            $transaction_id=$senderWallet->id+1;
         
            $receiverWallet=new UserWallet;
            $receiverWallet->user_id=$receiver->id;
            $receiverWallet->company_id=$receiver->company_id;
            $receiverWallet->transaction_id= $transaction_id;        
            $receiverWallet->transaction_alias='USR'.str_pad($transaction_id, 6, 0, STR_PAD_LEFT);
            $receiverWallet->transaction_desc=trans('api.transaction.wallet_transfer');
            $receiverWallet->type='C';
            $receiverWallet->amount=$request->amount;        

            if(empty($receiver->wallet_balance))
                $receiverWallet->open_balance=0;
            else
                $receiverWallet->open_balance=$receiver->wallet_balance;

            if(empty($receiver->wallet_balance))
                $receiverWallet->close_balance=$request->amount;
            else            
                $receiverWallet->close_balance=$receiver->wallet_balance+$request->amount;

            $receiverWallet->save();
            
            $receiver->wallet_balance = $receiver->wallet_balance + $request->amount;
            $receiver->save();
            

            (new SendPushNotification)->sendPushToUser($receiver->id, 'wallet', trans('user.wallet_transferred'));

            return Helper::getResponse(['status' => 200, 'message' => trans('user.wallet_transferred')]);
          }else{
               return Helper::getResponse(['status' => 422,'message' => trans('user.wallet_type')]);

          } 

        }catch (ModelNotFoundException $e) {
            return Helper::getResponse(['status' => 500,'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }
    }


    //S3 storage

    public function s3index()
   {
       $url = 'https://s3.' . env('AWS_DEFAULT_REGION') . '.amazonaws.com/' . env('AWS_BUCKET') . '/';
       $images = [];
       $files = Storage::disk('s3')->files('images');
           foreach ($files as $file) {
               $images[] = [
                   'name' => str_replace('images/', '', $file),
                   'src' => $url . $file
               ];
           }

       return view('welcome', compact('images'));
   }

    public function uploadVideo(Request $request)
    {

        $this->validate($request, [
           'video' => 'required',
           'request_id' => 'required'
       ]);

        try{

            $user = Auth::guard('user')->user();
            
            $company_id = $user ? $user->company_id : 1;
            
            if ($request->hasFile('video')) {
                $file = $request->file('video');
                $fileContents = file_get_contents($file);
                $name = time() .'_user_'.$file->getClientOriginalName();
                $store = Storage::disk('s3')->put($name, $fileContents);

                $img_url = env('AWS_URL') .'/'.$name;

                if($store === true){

                    $S3_storage = new S3Storage();
                    $S3_storage->company_id = $company_id;
                    $S3_storage->request_id = $request->request_id;
                    $S3_storage->img_url = $img_url;
                    $S3_storage->type = "USER";
                    $S3_storage->save();
                }               
            }

        $admins = Admin::where('type', 'ADMIN')->get();
        $settings = json_decode(json_encode(Setting::where('company_id', Auth::guard('user')->user()->company_id)->first()->settings_data));
        $site = $settings->site;
        // PushNotification::sendNow($admins, new WebPushNotification('Gox', 'http://dev6.spaceo.in/project/grideapp_web/public/images/common/favicon.ico', 'This is test'));
        PushNotification::send($admins, new WebPushNotification($site->site_title, $site->site_icon, 'Hi Admin, User '.Auth::guard('user')->user()->first_name. " " .Auth::guard('user')->user()->last_name. " has pressed the SOS button." ));

        return Helper::getResponse(['status' => 200, 'message' => trans('user.video_uploaded')]); 


        }catch (ModelNotFoundException $e) {
            dd($e);
            return Helper::getResponse(['status' => 500,'message' => trans('admin.something_wrong'), 'error' => $e->getMessage()]);
        }

    }

	
}
