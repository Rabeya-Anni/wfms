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
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="{{route('showpackage')}}">Packages</a></li>
                                        <li><a href="{{route('showitem')}}">Items</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('location')}}">Location</a></li></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <div class="logo-img d-none d-lg-block">
                                                <a href="index.html">
                                                    <img src="{{url('img/greenbowllogo.png')}}" style="height: 162px;" alt="">
                                                </a>
                                            </div>
                                        <li><a href="{{route('userprofile')}}">User Profile</a></li></li>
                                        @if(auth()->user())
                                        <li><a href="{{route('giverequestform')}}">Food Request</a></li>
                                        @endif    
                                        @if(auth()->user())
                                        <li><a href="{{route('logoutform')}}">logout</a></li>
                                        @else
                                        <li><a href="{{route('registrationform')}}">Registration</a></li>
                                        <li><a href="{{route('employeeregistrationform')}}">Employee Registration</a></li>
                                        <li><a href="{{route('loginform')}}">Login</a></li>
                                        @endif
                                        <li class="nav-item">
                                        <a class="nav-link" href="{{route('cart.get')}}">Cart ({{session()->has('cart') ? count(session()->get('cart')):0}})</a>
                                        </li>
                                      
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12" style="background-image:url('/bg1.jpg')">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                        <div class="logo-img-small d-sm-block d-md-block d-lg-none">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->