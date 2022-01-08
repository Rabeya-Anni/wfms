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
<h4>Edit Distribution</h4>
<form action="{{route('distribution.update',$distribution->id)}}" method='post'>
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Organization Name</label>
    <input required name="organization_name" value="{{$distribution->organization_id}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organization ID">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Food Name</label>
    <input required name="food_name" value="{{$distribution->food_name}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Food Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input required name="quantity" value="{{$distribution->quantity}}" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantity">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Assign Employee</label>
    <select name="assigned_employee" type="text" class="form-control" id="exampleFormControlSelect1">
      <option>Mohammad Jahid khan</option>
      <option>Mr. Asad Hossain</option>
      <option>Md. Nasir Hossain</option>
      <option>Mr. Abdullah</option>
      <option>Mrs. Hiya</option>
      <option>Mrs. Noushin</option>
    </select>
  </div>
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection