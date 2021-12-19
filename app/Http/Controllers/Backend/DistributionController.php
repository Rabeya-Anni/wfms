<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distribution;

class DistributionController extends Controller
{
    public function distribution()
    {
        $distributions = distribution::all();
        return view('admin.layout.distribution.distribution',compact('distributions'));
    }


    public function distributionform()
    {
        return view('admin.layout.distribution.distributionform');
    }


    public function distributionstore(Request $request)
    {
        
        $request->validate([
             'organization_id'=>'required',
             'food_name'=>'required',
             'quantity'=>'required',
         ]);
        try{
           Distribution::create([
            'organization_id'=>$request->organization_id,
            'food_name'=>$request->food_name,
            'quantity'=>$request->quantity,
          ]);

          return redirect()->route('distribution')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }

}
