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

<a class="btn btn-primary" href="{{route('item.create')}}" role="button">Add new item</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Package name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($items as $key=>$item)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->package->name}}</td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$items->links()}}

@endsection