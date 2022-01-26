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
<h4>GREEN BOWL CATERING</h4>
</center>
<h4>Item Table</h4>

<a class="btn btn-primary" href="{{route('itemform')}}" role="button">Create a new item</a>

<!-- <------Search-----> 
<form  action="{{route('item')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form>
<!-- <------End Search----->

<table class="table">
<thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key=>$item)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($item->name)}}</td>
      <td>{{($item->details)}}</td>
      <td><img src = "{{(url('/uploads/'.$item->image))}}" alt="item image" width="100px"></td>
      <td>
        <a class="btn btn-warning" href="{{route('item.view',$item->id)}}">View</a>
        <a class="btn btn-success" href="{{route('item.edit',$item->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('item.delete',$item->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach  
  </tbody>
</table>



@endsection