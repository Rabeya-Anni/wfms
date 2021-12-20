@extends('admin.master')


@section('content')
<h1>Item Details</h1>
      <p><img src = "{{(url('/uploads/'.$package->image))}}" alt="package image" width="100px"></p>
      <p>{{($package->name)}}</p>
      <p>{{($package->price_per_person)}}</p>
      <p>{{($package->details)}}</p>
      


@endsection