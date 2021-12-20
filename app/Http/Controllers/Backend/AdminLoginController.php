<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminLoginController extends Controller
{
    public function adminlogin(){
        return view('admin.adminlogin');
    }

    public function dologin(Request $request){
        // dd($request->all());

           $userInfo = $request->except('_token');
        //    dd($userpost);
        //    dd($request->all());
           if (Auth::attempt($userInfo)){
               
               return redirect()->route('admin')->with('message','Login Successful.');
           }
           
            return redirect()->back()->withErrors('Invalid User/Please Write Your Correct Information');

           }
           
        
    
    public function adminlogout(){    
     Auth::logout();
    return redirect()->route('admin')->with('message','logging Out.');
    }
}

