@extends('website.master')

@section('content')

<!-- //table header start -->
<br><br><br><br><br><br><br>
<body>
<!-- //table header end -->

<h2>Request Details</h2><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Food Quantity</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  @foreach($foodrequests as $key=>$foodrequest)
    <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{($foodrequest->requestRelation->username)}}</td>
    <td>{{($foodrequest->type)}}</td>
    <td>{{($foodrequest->food_quantity)}}</td>
    <td>{{($foodrequest->status)}}</td>
   
    </tr>
  @endforeach 

</tbody>
</table>


@endsection