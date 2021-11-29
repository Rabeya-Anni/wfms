<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
//use App\Models\Package;

class ItemController extends Controller
{
    public function item()
    {
        $items = Item::all();
        return view('admin.layout.item.item',compact('items'));
    }


    public function itemform()
    {
        $items = Item::all();
        return view('admin.layout.item.itemform');//,compact('items'));
    }

     public function store(Request $request)
    {
        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        $request->validate([
             'item_id'=>'required',
             'name'=>'required',
             'price_per_person'=>'required',
             'image'=>'required',
         ]);
        try{
            Item::create([
            'item_id'=>$request->item_id,
            'name'=>$request->name,
            'price_per_person'=>$request->price_per_person,
            'image'=>$filename,
          ]);

          return redirect()->route('item')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
}
