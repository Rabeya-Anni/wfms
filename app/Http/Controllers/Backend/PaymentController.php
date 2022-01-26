<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Orderdetail;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
       
        $orders = Order::all();
        return view('admin.layout.payment.payment',compact('orders'));
    }

    //<------ payment view--->
    public function paymentview($id)
    {
        $orderdetails = Orderdetail::where('order_id',$id)->get();
        $orders = Order::find($id);
        return view('admin.layout.payment.paymentview',compact('orderdetails','orders'));
    }

 
    //<------ payment delete--->
    public function paymentdelete($id){
    Order::find($id)->delete();
    return redirect()->back()->with('success','Payment Delete.');
}
         
}
