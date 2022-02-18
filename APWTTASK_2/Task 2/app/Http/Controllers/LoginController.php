<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginlist()
    {
        return view('pages.login.list');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'username'=> 'required|min:10',
                'password'=>'required'
            ],
            [
                'username.required'=> 'Please Enter your name',

                'password.required'=> 'Please Enter your password',
                
            ]
           
        );

        return "LOGIN SUCCESSFULL"; 
}
}
