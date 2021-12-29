@extends('admin.master')


@section('content')

<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<h1>Employee Details</h1>
      <p><img src = "{{(url('/uploads/'.$employee->image))}}" alt="employee image" width="100px"></p>
      <p>{{($employee->name)}}</p>
      <p>{{($employee->address)}}</p>
      <p>{{($employee->designation)}}</p>
      <p>{{($employee->phone_number)}}</p>
      
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