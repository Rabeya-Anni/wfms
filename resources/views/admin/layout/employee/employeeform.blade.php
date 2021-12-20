@extends('admin.master')


@section('content')
<form action="{{route('employee.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name"required>
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
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection