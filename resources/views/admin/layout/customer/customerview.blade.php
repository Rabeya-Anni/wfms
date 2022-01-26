@extends('admin.master')


@section('content')

<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>
<h1>Customer Details</h1><br>
      <dl class="row">
      <dt class="col-sm-2">Username:</dt>
      <dd class="col-sm-2">{{($customer->username)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Email:</dt>
      <dd class="col-sm-2">{{($customer->email)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Phone Number:</dt>
      <dd class="col-sm-2">{{($customer->phone_number)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Address:</dt>
      <dd class="col-sm-2">{{($customer->address)}}</dd>
      </dl>

@endsection