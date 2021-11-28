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
      <th scope="col">Order ID</th>
      <th scope="col">Package ID</th>
      <th scope="col">Item ID</th>
      <th scope="col">Customer ID</th>
      <th scope="col">Name</th>
      <th scope="col">Order Quantity</th>
      <th scope="col">Address</th>
      <th scope="col">Date</th>
      <th scope="col">Cost</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Mark</td>
      <td>Otto</td>
      <td>Otto</td>
    </tr>
    
  </tbody>
</table>

@endsection