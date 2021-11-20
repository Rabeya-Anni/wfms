<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
class AddnewpackageController extends Controller
{
    public function addnewpackage()
    {
        return view('admin.layout.addnewpackage');
    }
    public function store(Request $request)
    {
        Package::create([
            'package_id'=>$request->input('package_id'),
            'name'=>$request->input('name'),
            'price_per_person'=>$request->input('price_per_person'),
        ]);
        return redirect()->back();
    }
}
