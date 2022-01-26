@extends('admin.master')


@section('content')

<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>
<form action="{{route('distribution.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Organization Name</label>
    <input name="organization_name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organization Name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Food Name</label>
    <input name="food_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Food Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantity">
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
  
<button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection