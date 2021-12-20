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
<h4>Organization Table</h4>
<a class="btn btn-primary" href="{{route('employeeform')}}" role="button">Add an Employee</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Designation</th>
      <th scope="col">Phone Number</th>
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
      
      
    </tr>
  @endforeach    
  </tbody>
</table>

@endsection