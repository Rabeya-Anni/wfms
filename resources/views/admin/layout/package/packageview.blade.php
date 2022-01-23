@extends('admin.master')


@section('content')
<form class="print_order">
        <input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">

<h1>Package Details</h1>
      <p><img src = "{{(url('/uploads/'.$package->image))}}" alt="package image" width="100px"></p>
      <dl class="row">
      <dt class="col-sm-2">Package Name:</dt>
      <dd class="col-sm-2">{{($package->name)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Package price:</dt>
      <dd class="col-sm-2">{{($package->price_per_person)}}</dd>
      </dl>
      <dl class="row">
      <dt class="col-sm-2">Package Details:</dt>
      <dd class="col-sm-2">{{($package->details)}}</dd>
      </dl>
      
      @foreach($package->pack as $pack)

<p>{{$pack->item->name}}</p>

      @endforeach

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