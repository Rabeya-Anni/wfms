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
<h4>Payment Table</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Order ID</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payments as $key=>$payment)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($payment->customer_id)}}</td>
      <td>{{($payment->order_id)}}</td>
      <td>{{($payment->status)}}</td> 
      <td>
        <a class="btn btn-warning" href="{{route('payment.view',$payment->id)}}">View</a>
        <a class="btn btn-success" href="{{route('payment.edit',$payment->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('payment.delete',$payment->id)}}">Delete</a>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>

@endsection