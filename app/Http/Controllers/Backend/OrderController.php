<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(Request $request)
    {

        $search = $request->query('search');
        if($search){
        $orders = Order::where('order_quantity', 'LIKE', '%' .$search. '%')
        ->orWhere('address', 'LIKE', '%' .$search. '%')
        ->orWhere('date', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.order.order',compact('orders'));
        }

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

    public function orderview($id){
        $order = Order::find($id);
        return view('admin.layout.order.orderview',compact('order'));
    }

    public function orderedit($id){
        $order = Order::find($id);
        return view('admin.layout.order.orderedit',compact('order'));
    }

    public function orderupdate(Request $request,$id){
        $order = Order::find($id);

        
        try{
            $order->update([
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
    public function orderdelete($id){
        Order::find($id)->delete();
        return redirect()->back()->with('success','Order Delete.');
    }
}
