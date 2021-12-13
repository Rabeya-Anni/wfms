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
                                        <li><a href="#">About</a></li>
                                        <li><a href="{{route('showpackage')}}">Packages</a></li>
                                        <li><a href="{{route('showitem')}}">Items</a></li>
                                        <li><a href="gallery.html">Gallery</a></li>

                                        <div class="logo-img d-none d-lg-block">
                                                <a href="index.html">
                                                    <img src="img/logo.png" alt="">
                                                </a>
                                            </div>
                                        <li><a href="map.html">Location</a></li></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        @if(auth()->user())
                                        <li><a href="{{route('logoutform')}}">logout</a></li>
                                        @else
                                        <li><a href="{{route('registrationform')}}">Registration</a></li>
                                        <li><a href="{{route('loginform')}}">Login</a></li>
                                        @endif
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-12">
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