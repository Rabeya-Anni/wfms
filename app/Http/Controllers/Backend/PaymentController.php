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


        $search = $request->query('search');
        if($search){
        $orders = Order::with('user')->whereHas('user',function($query)use($search){
            $query->where('username','Like','%' .$search. '%');
        })->get();
        // dd($orders);
        // ('username', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.payment.payment',compact('orders'));
        }
        
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
    public function paymentdelete($id)
    {
        Order::find($id)->delete();
        return redirect()->back()->with('success','Payment Delete.');
    }
         

    //<------ payment status paid--->
public function paymentpaid($id)
{
    
    $order=Order::find($id);
   $order->update([
       'status'=>'paid'
   ]);

   return redirect()->back();
}


//<------ payment status due--->
public function paymentdue($id)
{
    
    $order=Order::find($id);
    $order->update([
       'status'=>'due'
   ]);

   return redirect()->back();
}
}
