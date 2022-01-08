@extends('admin.master')


@section('content')
<form action="{{route('employee.store')}}" method="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Designation</label>
    <input name="designation" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Designation"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input name="phone_number" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection