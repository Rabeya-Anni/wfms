@extends('admin.master')


@section('content')
<h4>Package Table</h4>

<a class="btn btn-primary" href="{{route('addnewpackage')}}" role="button">Create a new package</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Package Id</th>
      <th scope="col">Name</th>
      <th scope="col">Price per person</th>
    </tr>
  </thead>
  <tbody>
    @foreach($packages as $key=>$package)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$package->package_id}}</td>
      <td>{{$package->name}}</td>
      <td>{{$package->price_per_person}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$packages->links()}}

@endsection