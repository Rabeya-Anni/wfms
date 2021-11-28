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
<h4>Payment Table</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Payment ID</th>
      <th scope="col">E-mail</th>
      <th scope="col">Card</th>
      <th scope="col">Bank</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  
  </tbody>
</table>

@endsection