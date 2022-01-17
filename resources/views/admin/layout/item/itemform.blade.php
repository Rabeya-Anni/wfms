@extends('admin.master')


@section('content')
<form action="{{route('item.store')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Name"required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input name="details" type="text" class="form-control" placeholder="Details"required>  
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection