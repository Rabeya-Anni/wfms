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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Price per person</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($packages as $key=>$package)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($package->name)}}</td>
      <td>{{($package->price_per_person)}}</td>
      <td>{{($package->details)}}</td>
      <td><img src = "{{(url('/uploads/'.$package->image))}}" alt="package image" width="100px"></td>
    </tr>
    
  @endforeach 
  </tbody>
</table>



@endsection