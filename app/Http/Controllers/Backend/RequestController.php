<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foodrequest;

class RequestController extends Controller
{
    public function request()
    {
        $foodrequests = Foodrequest::all();
        return view('admin.layout.request.foodrequest',compact('foodrequests'));
    }

    public function requeststore(Request $request)
    {
        try{
            Foodrequest::create([
                'type'=>$request->type,
                'food_quantity'=>$request->food_quantity,
                
            
          ]);

          return redirect()->route('request')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }   

}
