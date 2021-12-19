<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Organization;

class OrganizationController extends Controller
{
    public function organization()
    {
        $organizations = Organization::all();
        return view('admin.layout.organization.organization',compact('organizations')); 
    }


    public function organizationform()
    {
        return view('admin.layout.organization.organizationform');//,compact('items'));
    }

    public function organizationstore(Request $request)
    {
        
        $request->validate([
             'name'=>'required',
             'address'=>'required',
             'email'=>'required',
             'phone_number'=>'required',
         ]);
        try{
            Organization::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
          ]);

          return redirect()->route('organization')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }
}

