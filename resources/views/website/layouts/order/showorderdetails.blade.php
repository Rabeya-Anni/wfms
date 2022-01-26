<!-- //table header start -->
@extends('website.master')

@section('content')
<br><br><br><br><br><br><br>
<body>
<!-- //table header end -->

<h2>Order Details</h2><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col"> User Name</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>

      <!-- <th scope="col">Action</th> -->
    </tr>
  </thead>
  <tbody>
   
  @foreach($orders as $key=>$order)
    <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{($order->orderRelation->username)}}</td>
    <td>{{($order->total)}}</td>
    <td>{{($order->status)}}</td>

   

    <!-- <td>
        <a class="btn btn-warning" href="{{route('paymentform')}}">Payment</a>
      </td>  -->
    </tr>
    @endforeach  
  </tbody>
</table><br><br>


@endsection
