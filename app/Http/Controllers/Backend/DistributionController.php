<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distribution;

class DistributionController extends Controller
{
    public function distribution(Request $request)
    {
        $search = $request->query('search');
        if($search){
            $distributions = Distribution::where('organization_id', 'LIKE', '%' .$search. '%')
            ->orWhere('quantity', 'LIKE', '%' .$search. '%')->get();
            return view('admin.layout.distribution.distribution',compact('distributions'));
        }

        $distributions = Distribution::all();
        return view('admin.layout.distribution.distribution',compact('distributions'));
    }


    public function distributionform()
    {
        return view('admin.layout.distribution.distributionform');
    }


    public function distributionstore(Request $request)
    {
        
        $request->validate([
             'organization_name'=>'required',
             'food_name'=>'required',
             'quantity'=>'required',
             'quantity'=>'required',
             
         ]);
        try{
           Distribution::create([
            'organization_name'=>$request->organization_name,
            'food_name'=>$request->food_name,
            'quantity'=>$request->quantity,
            'assigned_employee'=>$request->assigned_employee,
          ]);

          return redirect()->route('distribution')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }

    public function distributionview($id){
        $distribution = Distribution::find($id);
        return view('admin.layout.distribution.distributionview',compact('distribution'));
    }

    public function distributionedit($id){
        $distribution = Distribution::find($id);
        return view('admin.layout.distribution.distributionedit',compact('distribution'));
    }

    public function distributionupdate(Request $request,$id){
        $distribution = Distribution::find($id);

        
        try{
            $distribution->update([
                'organization_name'=>$request->organization_name,
                'food_name'=>$request->food_name,
                'quantity'=>$request->quantity,
                'assigned_employee'=>$request->assigned_employee,
            
            ]);

          return redirect()->route('distribution')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
    public function distributiondelete($id){
        Distribution::find($id)->delete();
        return redirect()->back()->with('success','Order Delete.');
    }

}
