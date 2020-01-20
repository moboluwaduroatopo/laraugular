<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoutingController extends Controller
{
    public function index(){
    	$data = array(
    		'title'=> 'my pages index',
    		'name' => ['john','jane','Yusuf','Taju']
    	);
    	
    	return view('pages.index')->with($data);
    }
    public function order(){
    	return view('pages/order');
    }
    public function addproduct(){
    	return view('pages/addproduct');
    }
    public function productlist(){
    	return view('pages/productlist');
    }
    public function invoice(){
    	return view('pages/invoice');
    }
    public function updateprofile()
    {
        // if ($request->hasFile('file')){
        //     $file=$request->file('file');
        //     $filename= time().'.'.$file->getClientOriginalExtension();
        //     Image::make($file)->resize(300, 300)->save(public_path('/upload/uploads/'.$filename));
        //     $user=auth()->user();
        //     //Auth::user();
        //     $user->file=$filename;
        //     $user->save();
        // }else{
        //     $user=auth()->user();
        //     //Auth::user();
        //     $user->name=$request->input('name');
        //     $user->email=$request->input('email');
        //     $user->phone=$request->input('phone');
        //     $user->role=$request->input('role');
        //     $user->save();
        // }
        // $user=auth()->user();
     return 'done';
 //        if ($user->role=='admin'){
 // return view('adminprofile', array('user'=>Auth::user()));
 //        }elseif ($user->role=='student') {
 //            return view('sprofile', array('user'=>Auth::user()));
 //        }else{
 //             return view('tprofile', array('user'=>Auth::user()));
 //        }
       //return response()->json(['success' => 'You have successfully uploaded an image'], 200);
           }
}
