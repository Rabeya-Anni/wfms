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
<h4>Item Table</h4>

<a class="btn btn-primary" href="{{route('itemform')}}" role="button">Create a new item</a>
<table class="table">
<thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Item Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price per person</th>
      <th scope="col">Image</th>
    </tr>
  </thead>
  <tbody>
  @foreach($items as $key=>$item)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{($item->item_id)}}</td>
      <td>{{($item->name)}}</td>
      <td>{{($item->price_per_person)}}</td>
      <td><img src = "{{(url('/uploads/'.$item->image))}}" alt="item image" width="100px"></td>
    </tr>
  @endforeach  
  </tbody>
</table>



@endsection