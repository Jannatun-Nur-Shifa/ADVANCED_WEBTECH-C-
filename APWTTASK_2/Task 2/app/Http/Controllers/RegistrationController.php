<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration(){
        return view('pages.registration.list');
    }
    public function validateRegistration(Request $request)
    {
        //using requests validate method
        $this->validate(
            $request,
            [
                'name'=>'required|min:7|max:50',
                'email'=>'email',
                'phone'=>'required',
                'dob'=>'required',
                'password'=>'required',
                'confirm password'=>'required'
                
            ],
            [
                'name.required'=>'Please Enter your Name',
                'email'=>'Please Enter your Email',
                'phone.required'=>'Please Enter your Phone No',
                'dob.required'=>'Please Enter your Date of birth',
                'password.required'=> 'Please Enter your password',
                'confirm password.required'=> 'Retype confirm password',
                
            ]
            );
     
            
            return "Register Successfully"; 
    }
}
