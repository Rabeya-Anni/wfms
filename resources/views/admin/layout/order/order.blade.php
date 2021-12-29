@extends('admin.master')


@section('content')
@if(session('success'))
        <div class="alert alert-success">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<h4>Order Table</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Order Quantity</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($order->order_quantity)}}</td>
      <td>{{($order->address)}}</td>
      <td>{{($order->date)}}</td> 
    </tr>
    @endforeach  
  </tbody>
</table>

@endsection