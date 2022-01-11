<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Package;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function order(Request $request)
    {

        $search = $request->query('search');
        if($search){
        $orders = Order::where('order_quantity', 'LIKE', '%' .$search. '%')
        ->orWhere('address', 'LIKE', '%' .$search. '%')
        ->orWhere('date', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.order.order',compact('orders'));
        }

        $orders = Order::all();
        return view('admin.layout.order.order',compact('orders'));
    }

    public function orderstore(Request $request)
    {
        try{
            Order::create([
            'food_details'=>$request->food_details,
            'order_quantity'=>$request->order_quantity,
            'address'=>$request->address,
            'date'=>$request->date,
            
          ]);

          return redirect()->route('order')->with('success', 'Profile updated!');
         }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }

    public function orderview($id){
        $order = Order::find($id);
        return view('admin.layout.order.orderview',compact('order'));
    }

    public function orderedit($id){
        $order = Order::find($id);
        return view('admin.layout.order.orderedit',compact('order'));
    }

    public function orderupdate(Request $request,$id){
        $order = Order::find($id);

        
        try{
            $order->update([
            'food_details'=>$request->food_details,
            'order_quantity'=>$request->order_quantity,
            'address'=>$request->address,
            'date'=>$request->date,
            
            ]);

          return redirect()->route('order')->with('success', 'Profile updated!');
        }
         catch(Throwable $throw)
         {
          return redirect()->back()->with('error', 'Profile updated!');
         }
    }
    public function orderdelete($id){
        Order::find($id)->delete();
        return redirect()->back()->with('success','Order Delete.');
    }

    public function addtocart($id)
    {

        $package=Package::find($id);
        if(!$package)
        {
            return redirect()->back()->with('error','No package found.');
        }

        $cartExist=session()->get('cart');

        if(!$cartExist) {
            //case 01: cart is empty.
            //  action: add product to cart
            $cartData = [
                $id => [
                    'package_id' => $id,
                    'name' => $package->name,
                    'price_per_person' => $package->price_per_person,
                    'package_qty' => 1,
                ]
            ];
            session()->put('cart', $cartData);
            return redirect()->back()->with('message', 'Product Added to Cart.');
        }

        //case 02: cart is not empty. but product does not exist into the cart
        //action: add different product with quantity 1
//        dd(isset($cartExist[$id]));
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] = [
                'package_id' => $id,
                'name' => $package->name,
                'price_per_person' => $package->price_per_person,
                'package_qty' => 1,
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }


        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)
        if(!isset($cartExist[$id]))
        {
            $cartExist[$id] ['package_qty']++;
            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }

    }

    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.layouts.cart.cart',compact('carts'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }
}
