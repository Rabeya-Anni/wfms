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

<center>
<h4>GREEN BOWL CATERING</h4>
</center>
<h4>Organization Table</h4>


<!-- <------Search-----> 
<form  action="{{route('organization')}}">
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
      <th scope="col">Address</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($organizations as $key=>$organization)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($organization->name)}}</td>
      <td>{{($organization->address)}}</td>
      <td>{{($organization->email)}}</td>
      <td>{{($organization->phone_number)}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('organization.view',$organization->id)}}">View</a>
        <a class="btn btn-success" href="{{route('organization.edit',$organization->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('organization.delete',$organization->id)}}">Delete</a>
      </td>
      
    </tr>
  @endforeach    
  </tbody>
</table>

@endsection