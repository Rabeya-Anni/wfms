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
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Organization ID</th>
      <th scope="col">Food Name</th>
      <th scope="col">Quantity</th>
    
    </tr>
  </thead>
  <tbody>
  @foreach($distributions as $key=>$distribution)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($distribution->organization_id)}}</td>
      <td>{{($distribution->food_name)}}</td>
      <td>{{($distribution->quantity)}}</td>  
      
    </tr>
  @endforeach 
   
  </tbody>
</table>

@endsection