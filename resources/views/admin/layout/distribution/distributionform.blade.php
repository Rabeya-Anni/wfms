@extends('admin.master')


@section('content')
<form action="{{route('distribution.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Organization ID</label>
    <input name="organization_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Organization ID">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Food Name</label>
    <input name="food_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Food Name">
  </div>


  <div class="form-group">
    <label for="exampleInputEmail1">Quantity</label>
    <input name="quantity" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Quantity">
  </div>

  <div class="Assign Employee">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  Assign Employee
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection