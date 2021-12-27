@extends('admin.master')


@section('content')
<h1>Customer Details</h1>
      <p>{{($customer->username)}}</p>
      <p>{{($customer->email)}}</p>
      <p>{{($customer->phone_number)}}</p>
      <p>{{($customer->address)}}</p>
      


@endsection