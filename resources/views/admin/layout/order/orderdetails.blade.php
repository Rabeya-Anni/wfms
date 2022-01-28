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

<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<center>
<h4>GREEN BOWL CATERING</h4>
</center>

<h4>Order Details Table</h4>

    <table class="table">
    <thead>
      <tr>
        <th scope="col">Serial</th>
        <th scope="col">Order ID</th>
        <th scope="col">Package Name</th>
        <th scope="col">Price</th>
        <th scope="col">Quantity</th>
        <th scope="col">Sub Total</th>
      </tr>
    </thead>
    <tbody>  
      @php
      $total= 0;
      @endphp
    @foreach($orderdetails as $key=>$orderdetail)
      <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$orderdetail->order_id}}</td>
      <td>{{$orderdetail->package_name}}</td>
      <td>{{$orderdetail->price}}</td>
      <td>{{$orderdetail->quantity}}</td>
      <td>{{$orderdetail->sub_total}}</td>
    @php
      $total = $total + $orderdetail->sub_total;
    @endphp
   
    </tr>
      @endforeach  
    </tbody>
  </table>
  <br>
  <table>
    <thead>
      <th>Total</th>
    </thead>
    <tbody>
      <td>{{$total}}</td>
    </tbody>
  </table>
</div>
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