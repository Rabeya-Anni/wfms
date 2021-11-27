<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function packagelist()
    {
        return view('admin.layout.package.package');
        // $package=Package::all();
        // $packages = Package::orderBy('id','desc')->paginate(2);
        // return view('admin.layout.package.package',[
            // 'package'=>$package 
        // ]);
    }
    public function

    
}
