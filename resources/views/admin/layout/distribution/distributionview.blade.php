@extends('admin.master')


@section('content')



<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">
<center>
<h4>GREEN BOWL CATERING</h4><br><br>
</center>

<h1>Distribution Details</h1><br>
      <dl class="row">
      <dt class="col-sm-2">Organization Name:</dt>
      <dd class="col-sm-2">{{($distribution->organization_name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Food Name:</dt>
      <dd class="col-sm-2">{{($distribution->food_name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Quantity:</dt>
      <dd class="col-sm-2">{{($distribution->quantity)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Assigned Employee:</dt>
      <dd class="col-sm-2">{{($distribution->assigned_employee)}}</dd>
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