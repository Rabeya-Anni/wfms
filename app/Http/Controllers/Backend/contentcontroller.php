<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use App\Models\User;
use Illuminate\Http\Request;

class contentcontroller extends Controller
{
    public function admin(){

        
        $count['package']=Package::all()->count();
        $count['order']=Order::all()->count();
        $count['customer']=User::all()->count();

        return view('admin.layout.content',compact('count'));
    }
    
}



