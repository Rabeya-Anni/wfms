<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>GREEN BOWL CATERING</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/greenbowllogo.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{url('Website/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/animate.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/slicknav.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/style.css')}}">
    <link rel="stylesheet" href="{{url('Website/css/responsive.css')}}"> 
</head>

<body>

    @include('website.partials.header')

    <!-- slider_area-start -->

    @yield('content')

    @include('website.partials.footer')
    <!-- JS here -->
    <script src="{{url('Website/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{url('Website/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{url('Website/js/popper.min.js')}}"></script>
    <script src="{{url('Website/js/bootstrap.min.js')}}"></script>
    <script src="{{url('Website/js/owl.carousel.min.js')}}"></script>
    <script src="{{url('Website/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{url('Website/js/ajax-form.js')}}"></script>
    <script src="{{url('Website/js/waypoints.min.js')}}"></script>
    <script src="{{url('Website/js/jquery.counterup.min.js')}}"></script>
    <script src="{{url('Website/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{url('Website/js/scrollIt.js')}}"></script>
    <script src="{{url('Website/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{url('Website/js/wow.min.js')}}"></script>
    <script src="{{url('Website/js/nice-select.min.js')}}"></script>
    <script src="{{url('Website/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{url('Website/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('Website/js/plugins.js')}}"></script>

    <!--contact js-->
    <script src="{{url('Website/js/contact.js')}}"></script>
    <script src="{{url('Website/js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{url('Website/js/jquery.form.js')}}"></script>
    <script src="{{url('Website/js/jquery.validate.min.js')}}"></script>
    <script src="{{url('Website/js/mail-script.js')}}"></script>
    <script src="{{url('Website/js/main.js')}}"></script>
</body>
</html>