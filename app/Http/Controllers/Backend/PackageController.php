<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Item;

class PackageController extends Controller
{

    public function package(Request $request)
    {
        

        $search = $request->query('search');
        if($search){
        $packages = Package::where('name', 'LIKE', '%' .$search. '%')
            ->orWhere('price_per_person', 'LIKE', '%' .$search. '%')->get();
            return view('admin.layout.package.package',compact('packages'));
        }

        $packages = Package::all();
        return view('admin.layout.package.package',compact('packages'));
        
    }
    public function packageform()
    {
        $packages = Package::all();
        $items = Item::all();
        return view('admin.layout.package.packageform',compact("packages",'items'));
        
    }
    public function packagestore(Request $request)
    {
        // dd($request->all());



        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        // dd($request->all());
        $request->validate([
             'name'=>'required',
             'details'=>'required',
             'price_per_person'=>'required',
             'selected_item'=>'required',
        ]);

        try{
          $s=  Package::create([
                'name'=>$request->name,
                'price_per_person'=>$request->price_per_person,
                'details'=>$request->details,
                // 'selected_item'=>json_encode($request->selected_item),
                'image'=>$filename,
            ]);

            foreach($request->selected_item as $item)
            {
                PackageItem::create([
                    'package_id'=>$s->id,
                    'item_id'=>$item
                ]);
            }
             

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

    public function packageedit($id){
        $package = Package::find($id);
        return view('admin.layout.package.packageedit',compact('package'));
    }

    public function packageupdate(Request $request,$id){
        $package = Package::find($id);

        if($request->hasFile('image')){
            $file = $request->file('image');
            $filename = (date('Ymdhms')).'.'.$file->getClientOriginalextension();
            $file->storeAs('/uploads',$filename);
        }
        try{
            $package->update([
                'name'=>$request->name,
                'details'=>$request->details,
                'price_per_person'=>$request->price_per_person,
                'selected_item'=>$request->selected_item,
                'image'=>$filename,
            ]);

          return redirect()->route('package')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }

    }

    public function packagedelete($id){
        Package::find($id)->delete();
        return redirect()->back()->with('success','Package Delete.');
    }

    
}
