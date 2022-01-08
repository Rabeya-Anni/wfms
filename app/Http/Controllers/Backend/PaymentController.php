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
        return view('admin.layout.payment.payment');
    }


    // public function paymentstore(Request $request)
    // {
    //     try{
    //         Payment::create([
    //         'customer_id'=>$request->customer_id,
    //         'order_id'=>$request->order_id,
    //         'status'=>$request->status,
            
    //       ]);

    //       return redirect()->route('payment')->with('success', 'Profile updated!');
    //      }
    //      catch(Throwable $throw)
    //      {
    //       return redirect()->back()->with('error', 'Profile updated!');
    //      }
    // }

    public function paymentview($id){
        $payment = Payment::find($id);
        return view('admin.layout.payment.paymentview',compact('payment'));
    }

    public function paymentedit($id){
        $payment = Payment::find($id);
        return view('admin.layout.payment.paymentedit',compact('payment'));
    }

    public function paymentupdate(Request $request,$id){
        $payment = Payment::find($id);

        
        try{
            $payment->update([
            'customer_id'=>$request->customer_id,
            'order_id'=>$request->order_id,
            'status'=>$request->status,
            
            ]);

          return redirect()->route('payment')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
    public function paymentdelete($id){
        Payment::find($id)->delete();
        return redirect()->back()->with('success','Payment Delete.');
    }
}
