<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
class AddnewpackageController extends Controller
{
    public function addnewpackage()
    {
        $package = Package::all();
        dd($package);
        return view('admin.layout.package.addnewpackage',compact('package'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'package_id'=>'required',
            'name'=>'required',
            'price_per_person'=>'required',
        ]);  
        Package::create([
            'package_id'=>$request->package_id,
            'name'=>$request->name,
            'price_per_person'=>$request->price_per_person,
        ]);
        
        return redirect()->back()-with('error', 'Profile updated!');
        
    }
}
