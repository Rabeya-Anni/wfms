<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Package;
use Illuminate\Http\Request;


class OrderController extends Controller
{
    public function order(Request $request)
    {

        $search = $request->query('search');
        if($search){
        $orders = Order::with('user')->whereHas('user',function($query)use($search){
            $query->where('username','Like','%' .$search. '%');
        })->get();
        // dd($orders);
        // ('username', 'LIKE', '%' .$search. '%')->get();
        return view('admin.layout.order.order',compact('orders'));
        }

        $orders = Order::with('orderRelation')->get();
        // dd($orders);
        return view('admin.layout.order.order',compact('orders'));
    }

// <------order view---->
    public function orderdetails($id)
    {
        $orderdetails = Orderdetail::where('order_id',$id)->get();
        $orders = Order::find($id);
        return view('admin.layout.order.orderdetails',compact('orderdetails','orders'));
    }

    
    //<------ order delete--->
    public function orderdelete($id){
        Order::find($id)->delete();
        return redirect()->back()->with('success','Order Delete.');
    }



//<------ order status confirm--->
public function orderconfirm($id)
{
    //find the data
    $order=Order::find($id);
   $order->update([
       'status'=>'confirm'
   ]);

   return redirect()->back();
}

//<------ order status cancel--->
    public function ordercancel($id)
    {
        //find the data
        $order=Order::find($id);
       $order->update([
           'status'=>'cancel'
       ]);

       return redirect()->back();
    }





    // <------Add to cart.......>

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
