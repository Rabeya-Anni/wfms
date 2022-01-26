<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Orderdetail;


class GiveOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function giveorder()
    {
      // insert order data into order table- user_id, total
 
        $carts= session()->get('cart');

        if($carts)
        {
            $order=Order::create([
                'user_id'=>auth()->user()->id,
                // 'total'=>array_sum(array_column($carts,'price_per_person')),
                'total'=>array_sum(array_column($carts,'sub_total'))
            ]);


        
         // insert details into order details table
            foreach ($carts as $key => $value) 
        {
            
            Orderdetail::create([
                'order_id'=> $order->id,
                'package_name'=>$value['name'],
                'price'=>$value['price_per_person'],
                'quantity'=>$value['package_qty'],
                'sub_total'=>$value['package_qty'] * $value['price_per_person'],

            ]);
        }
        session()->forget('cart');
        return redirect()->back()->with('message','Order Placed Successfully.');
       }
       return redirect()->back()->with('message','No Data found in cart.');
        
        //  $orders=Order::all();
        // return view('website.layouts.order.giveorder',compact('orders'));
    }


    


    

           
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
