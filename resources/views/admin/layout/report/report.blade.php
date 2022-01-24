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

<!-- report start -->
<div>
    <form>
        <div class="input-group rounded mt-3 mb-2">
            <input type="date" class="form-control rounded" value="{{request()->from_date}}" name="from_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <input type="date" class="form-control rounded" value="{{request()->to_date}}" name="to_date" placeholder="Search" aria-label="Search"
                   aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
    <button type="submit">submit</button>
  </span>
        </div>
    </form>
</div>
<!-- report End-->



<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">


<center>
<h4>GREEN BOWL CATERING</h4>
</center>

<center>
<h4>Report</h4>
</center>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col">User ID</th>
      <th scope="col">Package Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Sub Total</th>
      <!-- <th scope="col">Total</th> -->
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- @php
    $total= 0;
    @endphp -->
  @foreach($orders as $key=>$order)
    <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{($order->orderRelation->username)}}</td>
    <td>{{($order->package_name)}}</td>
    <td>{{($order->price)}}</td>
    <td>{{($order->quantity)}}</td>
    <td>{{($order->sub_total)}}</td>
    <!-- @php
    $subtotal = $order->sub_total;
    $total = $total + $subtotal;
    @endphp -->
    <!-- <td>{{$total}}</td> -->

    <td>
        <a class="btn btn-warning" href="{{route('order.view',$order->id)}}">View</a>
        <a class="btn btn-danger" href="{{route('order.delete',$order->id)}}">Delete</a>
      </td> 
    </tr>
    @endforeach  
  </tbody>
</table>

@endsection
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Backend/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>