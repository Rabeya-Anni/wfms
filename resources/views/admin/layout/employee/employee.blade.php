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
<h4>Employee Table</h4>
<a class="btn btn-primary" href="{{route('employeeform')}}" role="button">Add an Employee</a>

<!-- <------Search-----> 
<form  action="{{route('employee')}}">
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
      <th scope="col">Designation</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $key=>$employee)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($employee->name)}}</td>
      <td>{{($employee->address)}}</td>
      <td>{{($employee->designation)}}</td>
      <td>{{($employee->phone_number)}}</td>
      <td><img src = "{{(url('/uploads/'.$employee->image))}}" alt="employee image" width="100px"></td>
      <td>
        <a class="btn btn-warning" href="{{route('employee.view',$employee->id)}}">View</a>
        <a class="btn btn-success" href="{{route('employee.edit',$employee->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('employee.delete',$employee->id)}}">Delete</a>
      </td>
      
    </tr>
  @endforeach    
  </tbody>
</table>

@endsection