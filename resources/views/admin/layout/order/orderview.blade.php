@extends('admin.master')


@section('content')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<h1>Order Details</h1>
<dl class="row">
      <dt class="col-sm-2">Food Details:</dt>
      <dd class="col-sm-2">{{($order->food_details)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Order Quantity:</dt>
      <dd class="col-sm-2">{{($order->order_quantity)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Address:</dt>
      <dd class="col-sm-2">{{($order->address)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Date:</dt>
      <dd class="col-sm-2">{{($order->date)}}</dd>
      </dl>

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