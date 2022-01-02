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
<h4>Distribution Table</h4>
<a class="btn btn-primary" href="{{route('distributionform')}}" role="button">Assign</a>

<!-- <------Search-----> 
<form  action="{{route('distribution')}}">
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
      <th scope="col">Organization Name</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Assigned Employee</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($distributions as $key=>$distribution)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($distribution->organization_name)}}</td>
      <td>{{($distribution->food_name)}}</td>
      <td>{{($distribution->quantity)}}</td>
      <td>{{($distribution->assigned_employee)}}</td>
      <td>
        <a class="btn btn-warning" href="{{route('distribution.view',$distribution->id)}}">View</a>
        <a class="btn btn-success" href="{{route('distribution.edit',$distribution->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('distribution.delete',$distribution->id)}}">Delete</a>
      </td>  
      
    </tr>
  @endforeach 
   
  </tbody>
</table>

@endsection