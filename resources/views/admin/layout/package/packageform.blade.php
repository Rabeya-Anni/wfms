@extends('admin.master')


@section('content')

<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>
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
      
    @foreach($items as $key=>$item)
      <option value="{{$item->id}}">{{($item->name)}}</option>
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