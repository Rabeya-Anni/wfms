@extends('admin.master')


@section('content')
<h1>Item Details</h1>
      <p><img src = "{{(url('/uploads/'.$item->image))}}" alt="item image" width="100px"></p>
      <p>{{($item->name)}}</p>
      <p>{{($item->price_per_person)}}</p>
      <p>{{($item->details)}}</p>
      


@endsection