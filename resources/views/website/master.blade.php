<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Catering</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{url('img/logo.png')}}">
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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    @include('website.fixed.header')
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-10">
                            <div class="main-menu d-none d-lg-block">
                                 <nav>
                                   <ul class="mein_menu_list" id="navigation">
									  <li></li><br/>
									<li></li><br/>
									<li></li><br/>
									<li></li><br/>
                                        <li><a href="{{url('about.html')}}">About</a></li>
                                        <li><a href="{{url('service.html')}}">Services</a></li>
                                        <li><a href="{{url('teams.html')}}">Teams</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="{url('index.html')}}">
                                                    <img src="{{url('img/logo.png')}}" alt="">
                                                </a>
                                            </div>
                                        <li><a href="{{url('gallery.html')}}">Gallery</a></li>
                                        <li><a href="{{url('map.html')}}">Location</a></li></li>
                                        <li><a href="{{url('contact.html')}}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="{{url('index.html')}}">
                                    <img src="{{url('img/logo.png')}}" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area-start -->
    <div class="slider_area zigzag_bg_2">
        <div class="slider_sctive owl-carousel">
            <div class="single_slider slider_img_1">
                <div class="single_slider-iner">
                    <div class="slider_contant text-center">
                        <h3>Food Catering <br>
                            Service.</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women <br>
                            face higher conduct standards especially in the workplace. That’s why it’s <br>
                                crucial that, as women.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area-end -->

    <!-- service_area-start -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-60">
                        <h3>Our Services</h3>
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-gift"></i>
                        </div>
                        <h4>Birthday Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-cake"></i>
                        </div>
                        <h4>Wedding Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-dance"></i>
                        </div>
                        <h4>Party Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <h4>Event Catering</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-businessman"></i>
                        </div>
                        <h4>Corporate Service</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service">
                        <div class="service_icon">
                            <i class="flaticon-running-man"></i>
                        </div>
                        <h4>Catering On Demand</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service_area-end -->

    <!-- video_area_start -->
   
    <!-- video_area_end -->

    <!-- order_area_start -->
    <div class="order_area">
        <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section_title mb-70">
                            <h3>Our Catering Menu</h3>
                            <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards <br> especially in the workplace. That’s why it’s crucial that, as women.</p>
                        </div>
                    </div>
                </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('img/order/order-1.png')}}" alt="">
                            
                        </div>
                        <div class="order_info">
                            <h3><a href="#">First Meal</a></h3>
                            <p>1 Meal   |  2 Meal <br>
                                    3 Meal   |   4 Meal <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('img/order/order-2.png')}}" alt="">
                            </div>
                        <div class="order_info">
                            <h3><a href="#">Main Meal</a></h3>
                           <p>1 Meal   |  2 Meal <br>
                                    3 Meal   |   4 Meal <br>
                            </p>
                         </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_order">
                        <div class="order_thumb">
                            <img src="{{url('img/order/order-3.png')}}" alt="">
                            </div>
                        <div class="order_info">
                            <h3><a href="#">Pudding/Final Meal</a></h3>
                            <p>1 Meal   |  2 Meal <br>
                                    3 Meal   |   4 Meal <br>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- order_area_end -->

    <!-- footer-start -->
    <footer class="footer_area footer-bg zigzag_bg_1">
        <div class="footer-top">
            <div class="container">
                <div class="row">
				<div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    
                            </h3>
                            <ul>
                              <li> </li>
                              <li></li>
                              <li></li>
                              <li></li> 
                            </ul>
                        </div>
                    </div>
					<div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                    
                            </h3>
                            <ul>
                              <li> </li>
                              <li></li>
                              <li></li>
                              <li></li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                  Map/Location
                            </h3>
                            <ul>
								Cape Town, Western Cape
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                   Information  
                            </h3>
                            <ul>
                              <li>#1 Client(Business Name) </li>
                              <li><a href="#">Contact Number</a></li>
                              <li><a href="#">Business Email</a></li>
                              <li>Business Time</li> 
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="heading">
                                   Quick Links
                            </h3>
                            <ul>
                                <li><a href="{{url('index.html')}}">Home</a></li>
                                <li><a href="{{url('about.html')}}">About</a></li>
                                <li><a href="{{url('gallery.html')}}">Gallery</a></li>
                                <li><a href="{{url('contact.html')}}">Contact</a></li>
                               
                            </ul>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-md-12 col-lg-8">
                        <div class="copyright">
                                <p class="footer-text"><!-- Link back to Github can't be removed. Website is licensed under MIT. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://github.com/benzito1590" target="_blank">Benzito Bezuidenhout</a>
<!-- Link back to Github can't be removed. Website is licensed under MIT. --></p>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-12 col-lg-4">
                        <div class="social_links">
                            <ul>
                                <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    @include('website.fixed.footer')
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