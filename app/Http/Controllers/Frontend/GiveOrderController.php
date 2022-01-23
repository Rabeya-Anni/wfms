<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class GiveOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function giveorder()
    {
        // dd('true');
        $cart = session('cart');
    
        // dd($cart['price_per_person'] * $cart['package_qty']);
        // dd(auth()->user());
        foreach ($cart as $key => $value) {
            // dd($value['price_per_person'] * $value['package_qty']);
            
            Order::create([
                'user_id'=>auth()->user()->id,
                'package_name'=>$value['name'],
                'price'=>$value['price_per_person'],
                'quantity'=>$value['package_qty'],
                'sub_total'=>$value['price_per_person'] * $value['package_qty'],
            ]);
            return redirect()->back();
        }
        
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
