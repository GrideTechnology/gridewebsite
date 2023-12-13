<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Mail;
use DB;

class EmailController extends Controller
{
    public function sendmail(Request $request)
    {
        // try{
         
            $first_name_new=$request->first_name_new;
            $last_name_new=$request->last_name_new;
            $email_new=$request->email_new;
            $phone_new=$request->phone_new;
            $service_radio=$request->service_radio;
            $size=$request->size;
            $restro_radio=$request->restro_radio;
            $restro_name=$request->restro_name;
            $restro_phone=$request->restro_phone;
            $restro_company_name=$request->restro_company_name;
            $cars_type=$request->cars_type;
            $tax_company_name=$request->tax_company_name;
            $tax_FEIN=$request->tax_FEIN;
            $payment_firstname=$request->payment_firstname;
            $payment_lastname=$request->payment_lastname;
            $payment_bankname=$request->payment_bankname;
            $acc_number=$request->acc_number;
            $payment_ach_number=$request->payment_ach_number;
            $terms=$request->terms;
            // DB::table('restaurant_user_signup')->insert([
            //     'first_name_new' =>$first_name_new,
            //     'last_name_new' => $last_name_new,
            //     'email_new'=>$email_new,
            //     'phone_new'=>$phone_new,
            //     "service_radio"=>$service_radio,
            //     "restro_name"=>$restro_name,
            //     "restro_phone"=>$restro_phone,
            //     "restro_company_name"=>$restro_company_name,
            //     "cars_type"=>$cars_type,
            //     "tax_company_name"=>$tax_company_name,
            //     "tax_FEIN"=>$tax_FEIN,
            //     "payment_firstname"=>$payment_firstname,
            //     "payment_lastname"=>$payment_lastname,
            //     "acc_number"=>$acc_number,
            //     "payment_ach_number"=>$payment_ach_number
            //      ]);
            // it@gridetech.com
            Mail::send('common.web.emailenquiry', ['request' => $request], function ($mail) use ($request){
                    $mail->from("it.gridetech@gmail.com","gridetech");
                    $mail->to('it@gridetech.com', $request->first_name_new)->subject('Restaurant Signup');
            });

           return Response::json(array('status' => 200,'message'   => "mail sent",'data'=>$request->all())); 

        //  }
        // catch(Exception $e)
        // {
        //     return Response::json(array('status' => 500,'message'   => "Something Went Wrong")); 
        // }

    }
}

