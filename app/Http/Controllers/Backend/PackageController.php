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
        return view('admin.layout.package.packageform');//compact("packages"));
        //$dd(package);
    }
    public function packagestore(Request $request)
    {

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        // dd($request->all());
        $request->validate([
             'name'=>'required',
             'price_per_person'=>'required',
             'details'=>'required',
        ]);

        try{
            Package::create([
                'name'=>$request->name,
                'price_per_person'=>$request->price_per_person,
                'details'=>$request->details,
                'image'=>$filename,
            ]);

            return redirect()->route('package')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
         
    }
    public function packageview($id){
        $package = Package::find($id);
        return view('admin.layout.package.packageview',compact('package'));
    }

    public function packagedelete($id){
        Package::find($id)->delete();
        return redirect()->back()->with('success','Package Delete.');
    }

    
}
