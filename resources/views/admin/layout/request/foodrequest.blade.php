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
<h4>Request Table</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Type</th>
      <th scope="col">Food Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($foodrequests as $key=>$foodrequest)
    <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{($foodrequest->type)}}</td>
    <td>{{($foodrequest->food_quantity)}}</td>
    </tr>
  @endforeach  
  </tbody>
</table>

@endsection