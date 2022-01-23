<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $search = $request->query('search');
        if($search){
        $packages = Package::where('name', 'LIKE', '%' .$search. '%')
        ->orWhere('price_per_person', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.package.package',compact('packages'));
        }

        $payments = Payment::all();
        return view('admin.layout.payment.payment',compact('payments'));
    }


    public function paymentstore(Request $request)
    {
        
            Payment::create([
            'user_id'=>$request->user_id,
            'order_id'=>$request->order_id,
            'total'=>$request->total,
            'status'=>$request->status,
            
          ]);

         
          return redirect()->back();
         
    }

    public function paymentapprove($id){
        $payment = Payment::find($id);
        if($payment->status)
        {
            $payment->update([
                'status' => 'approved'
            ]);
        }
        else
        {
            $payment->update([
                'status' => 'cancelled'
            ]);   
        }
           
        return redirect()->back()->with('success','Request Approve.');
    }

    public function paymentview($id){
        $payment = Payment::find($id);
        return view('admin.layout.payment.paymentview',compact('payment'));
    }

   
    public function paymentdelete($id){
        Payment::find($id)->delete();
        return redirect()->back()->with('success','Payment Delete.');
    }
}
