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
    public function about(){
    	return view('pages/about');
    }
    public function contact(){
    	return view('pages/contact');
    }
    public function signup(){
    	return view('pages/signup');
    }
    public function login(){
    	return view('pages/login');
    }
}
