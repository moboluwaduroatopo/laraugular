<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        $reg= new Registration;
        // $this->validate($request,[
        // 'username'=>'required|min:4',
        // 'email'=>'required',
        // 'pwd'=>'required'
        // ]);
         $reg->fname=$request->input('fname');
          $reg->lname=$request->input('lname');
           $reg->phone=$request->input('phone');
        $reg->username=$request->input('username');
         $reg->password=$request->input('password');
        $reg->email =$request->input('email');
        $reg->save();
        return json_encode($reg);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $user)
    {
        $logger =Registration::whereemail($user->email)->first();
        if ($user->password=$logger->password) {
           return json_encode($logger);
                   }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getlogin(Request $login)
    {
      $reg =Registration::whereemail($login->email)->first();
      if ($login) {
        return true;
      }else{
        return false;
      }
        //return view('/registration/edit')->with('reg',$reg);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
