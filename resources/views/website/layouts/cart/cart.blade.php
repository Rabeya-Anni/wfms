@extends('website.master')

@section('content')


    <h1 style="padding-top: 100px;">My Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Serial</th>
            <th scope="col">Package Name</th>
            <th scope="col">Price</th>
            <th scope="col">Quantity</th>
            <th scope="col">Sub Total</th>
        </tr>
        </thead>
        <tbody>

        @if($carts)
        @foreach($carts as $key=>$cart)
        <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$cart['name']}}</td>
            <td>{{$cart['price_per_person']}}</td>
            <td>{{$cart['package_qty']}}</td>
            <td>{{$cart['price_per_person'] * $cart['package_qty']}}</td>
        </tr>
        @endforeach
            @endif

        </tbody>
    </table>
    <a href="{{route('cart.clear')}}" class="btn btn-warning">Clear Cart</a>

    @endsection
