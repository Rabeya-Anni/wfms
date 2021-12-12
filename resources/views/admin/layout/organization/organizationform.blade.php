@extends('admin.master')


@section('content')
<a class="btn btn-primary" href="{{route('addneworganization')}}" role="button">Create an organization</a>
<form action="{{route('store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputPassword1" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input name="email" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input name="price_per_person" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Price">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection