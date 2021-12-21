@extends('admin.master')


@section('content')

<h4>Customer Table</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Username</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($customers as $key=>$customer)  
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{($customer->username)}}</td>
      <td>{{($customer->email)}}</td>
      <td>{{($customer->phone_number)}}</td>
      <td>{{($customer->address)}}</td>
      <a class="btn btn-danger" href="{{route('customer.delete',$customer->id)}}">Delete</a>
         
     </tr>
     @endforeach  
  </tbody>
</table>
@endsection