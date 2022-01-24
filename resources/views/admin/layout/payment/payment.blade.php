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

<!-- <------Search-----> 
<form  action="{{route('employee')}}">
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
      <th scope="col">Name</th>
      <th scope="col">Order ID</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($payments as $key=>$payment)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($payment->paymentRelation->username)}}</td>
      <td>{{($payment->order_id)}}</td>
      <td>{{($payment->total)}}</td> 
      <td>{{($payment->status)}}</td> 
      <td>
        <a class="btn btn-success" href="{{route('payment.approve',$payment->id)}}">Approve</a>
        <a class="btn btn-warning" href="{{route('payment.view',$payment->id)}}">View</a>
        <a class="btn btn-danger" href="{{route('payment.delete',$payment->id)}}">Delete</a>
      </td> 
    </tr>
    @endforeach
  </tbody>
</table>

@endsection