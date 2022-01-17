<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PackageItemController extends Controller
{
    public function packageitem(){
        return view('admin.layout.package.packageitem');
    }
}
