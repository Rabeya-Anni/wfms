@extends('admin.master')


@section('content')
<form action="{{route('package.store')}}" method='post' enctype="multipart/form-data">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" placeholder="Name"required>

    <div class="form-group">
    <label for="exampleInputEmail1">Details</label>
    <input name="details" type="text" class="form-control" placeholder="Details"required>  
  </div>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price per person</label>
    <input name="price_per_person" type="number" class="form-control"  placeholder="Price"required>
  </div>

  
  <div class="form-group">
    <label for="exampleFormControlSelect2">Select Item (press ctrl to select multiple value) </label>
    <select multiple name="selected_item[]" type="text" class="form-control" id="exampleFormControlSelect2">
      
      @foreach (json_decode($items) as $data)
      <option value="{{$data->id}}">{{($data->name)}}</option>
      @endforeach 
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Image</label>
    <input name="image" type="file" class="form-control"  placeholder="image"required>
  </div>
  
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection