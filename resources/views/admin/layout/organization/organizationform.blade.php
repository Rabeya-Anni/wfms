@extends('admin.master')


@section('content')
<form action="{{route('organization.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input name="phone_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection