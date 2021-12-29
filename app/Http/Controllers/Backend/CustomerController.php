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

    public function customerstore(Request $request)
    {
        try{
            Customer::create([
            'username'=>$request->username,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address,
            
          ]);

          return redirect()->route('customer')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }

    public function customerview($id){
        $customer = Customer::find($id);
        return view('admin.layout.customer.customerview',compact('customer'));
    }


    public function customerdelete($id){
        customer::find($id)->delete();
        return redirect()->back()->with('Success','Customer Delete.');
    }

    
}



