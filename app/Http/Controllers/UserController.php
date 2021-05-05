<?php

namespace App\Http\Controllers;
use Session;
use App\Models\Users;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function getRegistration(){
        return view('public.page.registration');
    }


    public function getForm1(){
        return view('public.page.form1');
    }


    public function getLogin(){

        if(session('user'))
        {
            return redirect()->back();
        }
        else{
            return view('public.page.login');
        }
        
    }


    public function postLogin(Request $req)
    {
        
        // check user and pass
        $user = Users::where('id',$req->id)
                    ->where('pass', $req->pass)->first();
    
        if (isset($user)) {
            session()->regenerate();
            session(['user' => $user]);

            return redirect('form1');
        }
        else {
            return redirect()->back()->with('danger', 'Login unsuccessfully');
        }
    }


    public function logout()
    {
        Session::forget('user');
        if(session('user'))
        {
            return redirect()->back();
        }
        else{
            return Redirect('login');
        }
    }
}
