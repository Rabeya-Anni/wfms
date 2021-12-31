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
<h4>Edit Employee</h4>
<form action="{{route('employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" value="{{$employee->name}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" value="{{$employee->address}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Address"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Designation</label>
    <input name="designation" value="{{$employee->designation}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Designation"required>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input name="phone_number" value="{{$employee->phone_number}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone number"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection