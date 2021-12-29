<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order()
    {
        $orders = Order::all();
        return view('admin.layout.order.order',compact('orders'));
    }

    public function orderstore(Request $request)
    {
        try{
            Order::create([
            'order_quantity'=>$request->order_quantity,
            'address'=>$request->address,
            'date'=>$request->date,
            
          ]);

          return redirect()->route('order')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
}
