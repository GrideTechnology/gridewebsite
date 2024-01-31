<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
use Mail;
use DB;
 
class FrontBlogController extends Controller
{

     public function index(Request $request)
     {
          // try {
          //      $client = new \GuzzleHttp\Client();
          //      if($request->has('page')) {
          //           $base_url = config('gride.BASE_URL') . '/blogs?page=' . $request->page;
          //      } else {
          //           $base_url = config('gride.BASE_URL') . '/blogs';
          //      }
          //      $response = $client->get($base_url);
          //      $data = json_decode($response->getBody());
          //      return view('common.web.blog',["data"=>$data->responseData->data,"links" => $data->responseData->links]);
          // } catch (GuzzleHttp\Exception\ClientException $exception) {
          //      abort(503);
          //      dd(json_decode($exception->getResponse()->getBody())->message);
          // } catch (\Exception $exception) {
          //      return abort(500, 'Contact our team to access your domain');
          //      dd($exception);
          // }
          return view('common.web.blog');
     }
     
     public function show($slug)
     {
          try {
               $client = new \GuzzleHttp\Client();
               $params['form_params'] = ['slug' => $slug];
               $response = $client->get(config('gride.BASE_URL') . '/single-blog'.'/'.$slug);
               $data = json_decode($response->getBody());
               $postData = (array)$data->responseData;
              
               if(!empty($data->responseData)) {
                    return view('common.web.single_blog',["data"=>$postData[0]]);
               } else {
                   abort(503);
               }
          } catch (GuzzleHttp\Exception\ClientException $exception) {
               abort(503);
               dd(json_decode($exception->getResponse()->getBody())->message);
          } catch (\Exception $exception) {
               return abort(500, 'Contact our team to access your domain');
               dd($exception);
          }
     }
        
}

