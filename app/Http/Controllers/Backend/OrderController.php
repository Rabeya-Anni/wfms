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

        $orders = Order::with('orderRelation')->get();
        // dd($orders);
        return view('admin.layout.order.order',compact('orders'));
    }

    public function orderstore(Request $request)
    {
        // dd($request->all());
        try{
            Order::create([
            'user_id'=>$request->user_id,
            'package_name'=>$request->package_name,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'sub_total'=>$request->sub_total,
            'total'=>$request->total,



            
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

  

   
    
    public function orderdelete($id){
        Order::find($id)->delete();
        return redirect()->back()->with('success','Order Delete.');
    }

    // Add to cart.......>

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
                    'sub_total' =>$package['price_per_person'] * 1

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
                'sub_total' =>$package['price_per_person'] * 1
            ];

            session()->put('cart', $cartExist);

            return redirect()->back()->with('message', 'Product Added to Cart.');
        }


        //case 03: product exist into cart
        //action: increase product quantity (quantity+1)

        $cartExist[$id]['package_qty']++;
        $cartExist[$id]['sub_total']=$cartExist[$id]['package_qty']*$cartExist[$id]['price_per_person'];
        session()->put('cart', $cartExist);

        return redirect()->back()->with('message', 'Product Added to Cart.');
    

    }

    public function getCart()
    {
       $carts= session()->get('cart') ?? [];
       $total = array_sum(array_column($carts, 'sub_total'));
        return view('website.layouts.cart.cart',compact('carts','total'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }
}
