@extends('admin.master')


@section('content')
<form action="{{route('store')}}" method="post" enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Item Id</label>
    <input name="item_id" type="number" class="form-control" placeholder="ID"required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="name" type="text" class="form-control"  placeholder="Name"required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Price per person</label>
    <input name="price_per_person" type="number" class="form-control"  placeholder="Price"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection