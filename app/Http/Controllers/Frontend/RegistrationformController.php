<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegistrationformController extends Controller
{
    public function registrationform(){
        return view('website.layouts.registrationform');
    }
    public function registrationstore(Request $request){
        
            User::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            
          ]);

          return redirect()->route('loginform');
         }
         
         

    public function loginform(){
        return view('website.layouts.loginform');   
    } 
    public function loginformstore(Request $request){
        // dd($request->all());

           $userpost = $request->except('_token');
        //    dd($userpost);
        //    dd($request->all());
           if (Auth::attempt($userpost)){
               
               return redirect()->route('home');
           }else{
            return redirect()->route('loginform');

           }
           
        
    }
    public function logout(){    
        Auth::logout();
        return redirect()->route('home');
    }
}
