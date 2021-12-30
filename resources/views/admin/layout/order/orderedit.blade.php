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
<h4>Edit Package</h4>
<form action="{{route('order.update',$order->id)}}" method='post'>
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Order Quantity</label>
    <input required name="order_quantity" value="{{$order->order_quantity}}" type="number" class="form-control" placeholder="Order Quantity"required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input required name="address" value="{{$order->address}}" type="text" class="form-control"  placeholder="Address"required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Date</label>
    <input required name="date" value="{{$order->date}}" type="date" class="form-control"  placeholder="Date"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection