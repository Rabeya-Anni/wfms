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


<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>
<h4>Edit Item</h4><br>
<form action="{{route('item.update',$item->id)}}" method='post' enctype="multipart/form-data">
@csrf
@method('PUT')
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input required name="name" value="{{$item->name}}" type="text" class="form-control" placeholder="Name"required>
    
  </div>

  
  <div class="form-group">
    <label for="exampleInputPassword1">Details</label>
    <input required name="details" value="{{$item->details}}" type="text" class="form-control"  placeholder="Details"required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input required name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection