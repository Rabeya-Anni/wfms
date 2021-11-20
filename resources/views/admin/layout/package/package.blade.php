@extends('admin.master')


@section('content')
<a class="btn btn-primary" href="{{route('addnewpackage')}}" role="button">Add new package</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    @foreach($packages as $key=>$package)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$packages->links()}}

@endsection