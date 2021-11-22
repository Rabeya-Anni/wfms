<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
class AddnewpackageController extends Controller
{
    public function addnewpackage()
    {
        return view('admin.layout.package.addnewpackage');
    }
    public function store(Request $request)
    {
        
        Package::create([
            'package_id'=>$request->package_id,
            'name'=>$request->name,
            'price_per_person'=>$request->price_per_person,
        ]);
        
        return redirect()->back()-with('error', 'Profile updated!');
        
    }
}
