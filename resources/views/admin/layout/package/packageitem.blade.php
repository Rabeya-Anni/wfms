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
<h4>Package Table</h4>

<!-- <----search---->
<!-- <form  action="{{route('package')}}">
<div class="input-group rounded mt-3 mb-2">
  <div class="form-outline">
    <input name="search" type="search" id="form1" class="form-control" placeholder="Search" arial-level="search" arial-describedby="search-addon" />
  </div>
  <button type="submit" class="btn btn-primary">
    <i class="fas fa-search"></i>
  </button>
</div>
</form> -->
<!-- <---- end search---->
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">Package ID</th>
      <th scope="col">Item ID</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
    <th scope="row"></th>
      <td></td>
      <td></td>
      
    
    </tr>
    
 
  </tbody>
</table>



@endsection