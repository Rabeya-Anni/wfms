<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function package()
    {
        $packages = Package::orderBy('id','desc')->paginate(2);
        return view('admin.layout.package',compact('packages'));
    }
}
