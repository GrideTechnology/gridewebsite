<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Carbon\Carbon;
use Illuminate\Support\Facades\Response;
 use Mail;
 use DB;
class BlogController extends Controller
{

    public function add(Request $request)
    {
      
      $slug=str_slug($request->title);
      $title=$request->title;
      $description=$request->description;
      $date=$request->date;
      $video=$request->video_url;

      $destinationPath = public_path('/storage/blogimages');
      if($request->file('picture')){
      $file=$request->file('picture');
         $imageName = time().'.'.$request->picture->extension();  
         $file->move($destinationPath,$imageName);
      }else{
         $imageName="";  
      }
      try{
      
            DB::table('posts')->insert([
            'title' =>$title,
            'content' => $description,
            'slug'=>$slug,
            'time'=>$date,
            "image"=>$imageName,
            "video"=>$video
            ]);

         return redirect()->back()->with('success', 'New Blog Created Successfully ');   

      }

      catch(Exception $e)
      {

         return redirect()->back()->with('error', 'Somthing Went Wrong Please try again');   

      }

   return true;

    }

   public function show(Request $request)
   {
 
      $data= DB::table('posts')->orderBy('id', 'DESC')->paginate(10);
      return view('common.admin.blog.index',["data"=>$data]);
   }
    
   public function delete(Request $request)
   {
  
      $id=$request->id;

      try{
      
         DB::table('posts')->delete($id);
         return redirect()->back()->with('success', 'Blog Deleted Successfully ');   

      }
      catch(Exception $e)
      {
         return redirect()->back()->with('error', 'Somthing Went Wrong Please try again');   
      }
   }
    

   public function UpdateForm(Request $request)
   {
  
      $id=$request->id;
      $data= DB::table('posts')->where('id',$id)->get();
      return view('common.admin.blog.edit_form',["data"=>$data]);
   }


   public function  update(Request $request)
   {
      $id=$request->id;
      if($id!==""){
      $slug=str_slug($request->title);
      $title=$request->title;
      $description=$request->description;
      $date=$request->date;
      $video=$request->video_url;
      $destinationPath = public_path('/storage/blogimages');
      if($request->file('picture')){
      $file=$request->file('picture');
         $imageName = time().'.'.$request->picture->extension();  
         $file->move($destinationPath,$imageName);
      }else{
         $imageName="";  
      }
      try{
      
            DB::table('posts')->where('id',$id)->update([
            'title' =>$title,
            'content' => $description,
            'slug'=>$slug,
            'time'=>$date,
            "image"=>$imageName,
            "video"=>$video
            ]);

         return redirect()->back()->with('success', 'Blog Updated Successfully ');   

      }

      catch(Exception $e)
      {

         return redirect()->back()->with('error', 'Somthing Went Wrong Please try again');   

      }
      return true;
      }else{
               return redirect()->back()->with('error', 'Somthing Went Wrong Please try again');   

      }
    }
  
   }

