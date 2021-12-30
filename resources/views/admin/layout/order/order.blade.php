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

<!-- <------Search-----> 
<form  action="{{route('order')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
<!-- <------End Search----->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Order Quantity</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($order->order_quantity)}}</td>
      <td>{{($order->address)}}</td>
      <td>{{($order->date)}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('order.view',$order->id)}}">View</a>
        <a class="btn btn-success" href="{{route('order.edit',$order->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('order.delete',$order->id)}}">Delete</a>
      </td> 
    </tr>
    @endforeach  
  </tbody>
</table>

@endsection