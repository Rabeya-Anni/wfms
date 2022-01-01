@extends('admin.master')


@section('content')

<h4>Customer Table</h4>

<!-- <------Search-----> 
<form  action="{{route('customer')}}">
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
      <td>
      <a class="btn btn-warning" href="{{route('customer.view',$customer->id)}}">View</a>
      <a class="btn btn-danger" href="{{route('customer.delete',$customer->id)}}">Delete</a>
    </td>   
     </tr>
     @endforeach  
  </tbody>
</table>
@endsection