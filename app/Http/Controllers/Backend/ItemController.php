<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;


class ItemController extends Controller
{
    public function item(Request $request)
    {

        $search = $request->query('search');
        if($search){
        $items = Item::where('name', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.item.item',compact('items'));
        }

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
             'name'=>'required',
             'details'=>'required',
             'image'=>'required',
         ]);
        try{
            Item::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'image'=>$filename,
          ]);

          return redirect()->route('item')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    
    }
    public function itemview($id){
        $item = Item::find($id);
        return view('admin.layout.item.itemview',compact('item'));
    }

    public function itemedit($id){
        $item = Item::find($id);
        return view('admin.layout.item.itemedit',compact('item'));
    }

    public function itemupdate(Request $request,$id){
        $item = Item::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        try{
            $item->update([
                'name'=>$request->name,
                'details'=>$request->details,
                'image'=>$filename,
            ]);

          return redirect()->route('item')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
    public function itemdelete($id){
        Item::find($id)->delete();
        return redirect()->back()->with('success','Item Delete.');
    }

    
}
