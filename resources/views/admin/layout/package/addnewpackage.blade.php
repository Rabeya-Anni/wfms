@extends('admin.master')


@section('content')
<form action="{{route('store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Package_id</label>
    <input name="package_id" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price_per_person</label>
    <input name="price_per_person" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection