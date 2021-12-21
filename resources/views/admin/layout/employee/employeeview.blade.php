@extends('admin.master')


@section('content')
<h1>Employee Details</h1>
      <p><img src = "{{(url('/uploads/'.$employee->image))}}" alt="employee image" width="100px"></p>
      <p>{{($employee->name)}}</p>
      <p>{{($employee->address)}}</p>
      <p>{{($employee->designation)}}</p>
      <p>{{($employee->phone_number)}}</p>
      


@endsection