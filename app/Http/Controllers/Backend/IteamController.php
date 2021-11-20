<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Package;

class IteamController extends Controller
{
    public function index()
    {
        $items = Item::with('package')->orderBy('id','desc')->paginate(10);
        return view('admin.layout.item.index',compact('items'));
    }


    public function create()
    {
        $packages = Package::orderBy('id','desc')->get();
        return view('admin.layout.item.create',compact('packages'));
    }

    public function store(Request $request)
    {
       try{
        Item::create([
            'name' => $request->name,
            'package_id' => $request->package_id,
        ]);

        return redirect()->route('item.list')->with('success', 'Profile updated!');
       }catch(Throwable $throw){
        return redirect()->back()->with('error', 'Profile updated!');
       }
    }
}
