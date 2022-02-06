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
<h4>Edit Package</h4><br>
<form action="{{route('package.update',$package->id)}}" method='post' enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" value="{{$package->name}}" type="text" class="form-control" placeholder="Name"required>

    <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input name="details" value="{{$package->details}}" type="text" class="form-control" placeholder="Details"required>  
  </div>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price per person</label>
    <input name="price_per_person" value="{{$package->price_per_person}}" type="number" class="form-control"  placeholder="Price"required>
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select Item (press ctrl to select multiple value) </label>
    <select multiple name="selected_item[]" type="text" class="form-control" id="exampleFormControlSelect2">
      
    @foreach($items as $key=>$item)
      <option value="{{$item->id}}">{{($item->name)}}</option>
      @endforeach 
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Update</button>
</form>

@endsection