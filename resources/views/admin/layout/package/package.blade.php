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
<h4>Package Table</h4>
<a class="btn btn-primary" href="{{route('packageform')}}" role="button">Create a new package</a>

<!-- <----search---->
<form  action="{{route('package')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
<!-- <---- end search---->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Price per person</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($packages as $key=>$package)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($package->name)}}</td>
      <td>{{($package->details)}}</td>
      <td>{{($package->price_per_person)}}</td>
      <td><img src = "{{(url('/uploads/'.$package->image))}}" alt="package image" width="100px"></td>
      <td>
        <a class="btn btn-warning" href="{{route('package.view',$package->id)}}">View</a>
        <a class="btn btn-success" href="{{route('package.edit',$package->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('package.delete',$package->id)}}">Delete</a>
      </td>
    </tr>
    
  @endforeach 
  </tbody>
</table>



@endsection