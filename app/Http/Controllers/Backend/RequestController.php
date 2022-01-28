<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foodrequest;
// use App\Models\User;

class RequestController extends Controller
{
    public function request()
    {

        $foodrequests = Foodrequest::with('requestRelation')->get();
        // dd($foodrequests);
        return view('admin.layout.request.foodrequest',compact('foodrequests'));
    }

    public function requeststore(Request $request)
    {

        // dd($request->all());
        
        try{
            // dd($request->all());
           Foodrequest::create([
                'user_id'=>auth()->user()->id,
                'type'=>$request->type,
                'food_quantity'=>$request->food_quantity,
                'status'=>$request->status,
          ]);

          

          return redirect()->route('request')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
    
    public function statusapprove($id){
        $foosrequest = Foodrequest::find($id);
        if($foosrequest->status)
        {
            $foosrequest->update([
                'status' => 'approved'
            ]);
        }
        else
        {
            $foodrequest->update([
                'status' => 'cancelled'
            ]);   
        }
           
        return redirect()->back()->with('success','Request Approve.');
    }


    public function statuscancel($id){
        $foosrequest = Foodrequest::find($id);
        if($foosrequest->status)
        {
            $foosrequest->update([
                'status' => 'cancelled'
            ]);
        }
    
        return redirect()->back()->with('success','Request cancel.');
    }
    
    public function requestdelete($id){
        Foodrequest::find($id)->delete();
        return redirect()->back()->with('success','Request Delete.');
    }
}
