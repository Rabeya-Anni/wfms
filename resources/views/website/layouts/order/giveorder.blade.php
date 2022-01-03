<!DOCTYPE html>
<html>
<head>
<title>GREEN BOWL CATERING</title>

@if(session('success'))
        <div class="alert alert-success" style="text-align:center; background:white">
            {!! session('success') !!}
        </div>
@endif

@if(session('error'))
        <div class="alert alert-danger">
            {!! session('error') !!}
    </div>
@endif

<a href="{{route('home')}}" class="btn btn-info" style="font-size: .9em;
color: #fff; background: #76b852; outline: none; border: 1px solid #76b852; 
cursor: pointer; padding: 0.9em;-webkit-appearance: none; width: 100%; margin: 2em 0; 
letter-spacing: 4px;margin-left: 105px;">Back to Home</a>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{url('Website/css/registration.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>GREEN BOWL CATERING</h1>
		<div class="main-agileinfo">
		<h1 class="text-uppercase text-center mb-5">Food order Form</h1>
			<div class="agileits-top">
			<form action="{{route('giveorder.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			        <input class="text" type="text" name="food_details" placeholder="Food Details" required=""><br>
					<input class="text" type="text" name="order_quantity" placeholder="Order Quantity" required=""><br>
					<input class="text" type="text" name="address" placeholder="Address" required=""><br>
					<input class="text" type="date" name="date" placeholder="Date" required=""><br>
					<div class="wthree-text">
						<!-- <label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label> -->
						<!-- <div class="clear"> </div> -->
					</div>
					<input type="submit" value="Order Submit">
				</form>
				
			</div>
		</div>
		<!-- copyright -->
		<!-- <div class="colorlibcopy-agile">
			<!-- <p>© 2018 Colorlib Signup Form. All rights reserved | Design by <a href="https://colorlib.com/" target="_blank">Colorlib</a></p> -->
		<!-- </div> --> -->
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>