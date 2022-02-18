<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public function contact(){
        return view('Contact');
    }
    public function validateContact(Request $request){
        $this->validate(
            $request,
            [
                'name'=>'required|min:5|max:30',
                'email'=>'email',
                'phone'=>'required',
                'message'=>'required|min:30|max:150'
            ],
            [
                'name.required'=>'Please Enter your Name',
                'name.min'=>'Name should be more than 5 charcters',
                'name.max'=>'Name should be less than 30 charcters',
                'email'=>'Please Enter your Email',
                'phone.required'=>'Please Enter your Phone',
                'message.required'=>'Please Enter your Message',
            ]
            );
        return "THANKS FOR YOUR ADVICE";      
    }
}
