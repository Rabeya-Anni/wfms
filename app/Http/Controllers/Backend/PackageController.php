<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function package()
    {
        $packages = Package::all();
        return view('admin.layout.package.package',compact('packages'));
        
    }
    public function packageform()
    {
        $packages = Package::all();
        return view('admin.layout.package.packageform',compact("packages"));
        //$dd(package);
    }
    public function store(Request $request)
    {
        $request->validate([
             'package_id'=>'required',
             'name'=>'required',
             'price_per_person'=>'required',
         ]);
          try{
           Package::create([
              'package_id'=>$request->package_id,
              'name'=>$request->name,
              'price_per_person'=>$request->price_per_person,
          ]);

           return redirect()->route('package')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
     }

    
}
