@extends('admin.master')


@section('content')
<a class="btn btn-primary" href="{{route('item.create')}}" role="button">Create an item</a>
<form action="{{route('item.store')}}" method="post">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Package Id</label>
    <select name="package_id" type="number" class="form-control" placeholder="ID"required>
    @foreach($packages as $package)  
       <option value="{{$package->id}}">{{$package->name}}</option>
    @endforeach 
  </select>  
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="name" type="text" class="form-control" placeholder="Name"required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection