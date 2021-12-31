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
<h4>Edit Organization</h4>
<form action="{{route('organization.update',$organization->id)}}" method='post'>
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input required name="name" value="{{$organization->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input required name="address" value="{{$organization->address}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input required name="email" value="{{$organization->email}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input required name="phone_number" value="{{$organization->phone_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection