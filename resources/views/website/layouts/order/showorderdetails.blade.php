<!-- //table header start -->
  @extends('website.master')

  @section('content')
<br><br><br><br><br><br><br>


<form class="print_order">
        <input class="btn btn-warning" type="button" onClick="PrintDiv();" value="Print">
    </form>

    <div id="divToPrint">
<br>
<body>
<!-- //table header end -->

<h2>Order Details</h2><br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial</th>
      <th scope="col"> User Name</th>
      <th scope="col">Total</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
  @foreach($orders as $key=>$order)
    <tr>
    <th scope="row">{{$key+1}}</th>
    <td>{{($order->orderRelation->username)}}</td>
    <td>{{($order->total)}}</td>
    <td>{{($order->status)}}</td>
<td>
<a class="btn btn-warning" href="#">Clear Details</a>

</td>
   
    </tr>
    @endforeach  
  </tbody>
</table><br><br>



@endsection
<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://127.0.0.1:8000/Website/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>