<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customer()
    {
        $customers = Customer::all();
        return view('admin.layout.customer.customer',compact('customers'));
    }
    
}



