@extends('admin.master')


@section('content')


    
<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>
<h1>Item Details</h1><br>
      
      <p><img src = "{{(url('/uploads/'.$item->image))}}" alt="item image" width="200px"></p>
      <dl class="row">
      <dt class="col-sm-2">Package Name:</dt>
      <dd class="col-sm-2">{{($item->name)}}</dd>
      </dl>
    
      <dl class="row">
      <dt class="col-sm-2">Package Details:</dt>
      <dd class="col-sm-2">{{($item->details)}}</dd>
      </dl>

@endsection

