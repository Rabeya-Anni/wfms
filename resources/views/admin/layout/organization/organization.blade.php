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
<a class="btn btn-primary" href="{{route('organizationform')}}" role="button">Add an Organization</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">E-mail</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
  @foreach($organizations as $key=>$organization)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($organization->name)}}</td>
      <td>{{($organization->address)}}</td>
      <td>{{($organization->email)}}</td>
      <td>{{($organization->phone_number)}}</td>
      
      
    </tr>
  @endforeach    
  </tbody>
</table>

@endsection