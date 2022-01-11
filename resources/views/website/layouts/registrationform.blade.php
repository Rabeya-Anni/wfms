<!DOCTYPE html>
<html>
<head>
<title>GREEN BOWL CATERING</title>
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
		<h1 class="text-uppercase text-center mb-5">Create Account</h1>
			<div class="agileits-top">
			<form action="{{route('registration.store')}}" method="post" enctype="multipart/form-data">
			@csrf
					<input class="text" type="text" name="username" placeholder="Username" required=""><br>
					<input class="text" type="email" name="email" placeholder="Email" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required=""><br>
					<input class="text" type="text" name="phone_number" placeholder="Phone Number" required=""><br>
					<input class="text" type="text" name="address" placeholder="Address" required=""><br>
					<div class="wthree-text">
						<label class="anim">
							<input type="checkbox" class="checkbox" required="">
							<span>I Agree To The Terms & Conditions</span>
						</label>
						<div class="clear"> </div>
					</div>
					<input type="submit" value="SIGN UP">
				</form>
				<p>Have Already an Account? <a href="{{route('loginform')}}"> Login Here!</a></p>
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