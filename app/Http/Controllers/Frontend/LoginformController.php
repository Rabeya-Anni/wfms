<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginformController extends Controller
{
    public function loginform(){
        return view('website.layouts.loginform');
    }
}
