@extends('admin.master')


@section('content')

<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>


<h1>Package Details</h1><br>
      <p><img src = "{{(url('/uploads/'.$package->image))}}" alt="package image" width="200px"></p>
      <dl class="row">
      <dt class="col-sm-2">Package Name:</dt>
      <dd class="col-sm-2">{{($package->name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Package price:</dt>
      <dd class="col-sm-2">{{($package->price_per_person)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Package Details:</dt>
      <dd class="col-sm-2">{{($package->details)}}</dd>
      </dl>

      <dl class="row">
      <dt class="col-sm-2">Items:</dt>
      
      @foreach($package->pack as $pack)

      <p>{{$pack->item->name}}</p>

      @endforeach
      </dl>
@endsection
