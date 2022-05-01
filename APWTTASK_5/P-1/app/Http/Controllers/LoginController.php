<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\sellsman;


class LoginController extends Controller
{
    public function destroy(Login $login)
    {
        //
    }

    public function Login(){
        return view('pages.login.list');
    }
    public function loginCheck(Request $request){
        $this->validate(
            $request,
            [
                
                'name'=> 'required',
                'password'=>'required'
            ],
            [
                'name.required'=> 'Please Enter your name',

                'password.required'=> 'Please Enter your password',
                
            ]
           
        );
    }


    public function loginSubmit(Request $request){
        $sellsman = sellsman::where('name',$request->name)
                            ->where('password',$request->password)
                            ->first();
        //dd($admin);

        //return $admin;
        if($sellsman){
            $request->session()->put('user',$sellsman->name);
            //dd(session()->get('user'));
            return redirect()->route('sells_manWelcome');
        }
        return back();
        //return "muta";
    }

    public function logout(){
        session()->forget('user');
        return redirect()->route('login');
    }
    
}
