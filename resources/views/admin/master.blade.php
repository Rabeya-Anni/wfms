<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{url('Backend/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        @include('admin.partial.header')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                       

                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="{{url('admin')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="{{route('employee')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                               Employee
                            </a>
                            <a class="nav-link" href="{{route('distribution')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-donate"></i></div>
                                Distribution
                            </a>

                            <!-- <div class="sb-sidenav-menu-heading">Interface</div> -->
                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->

                            <!-- <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div> -->

                            <!-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->

                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                   
                                    <!-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div> -->
                                </nav>
                            </div>

                            @if(auth()->user()->role=='admin')
                            
                            <div class="sb-sidenav-menu-heading">services</div>

                            <a class="nav-link" href="{{route('package')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-cube"></i></div>
                                package
                            </a>

                            <a class="nav-link" href="{{route('item')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-utensils"></i></div>
                                Item
                            </a>

                            <a class="nav-link" href="{{route('customer')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Customer
                            </a>

                            

                            <a class="nav-link" href="{{route('order')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Order
                            </a>

                            

                            <a class="nav-link" href="{{route('payment')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-credit-card"></i></div>
                                Payment
                            </a>

                            <a class="nav-link" href="{{route('request')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-bell"></i></div>
                                Wastage Food Request
                            </a>

                            <a class="nav-link" href="{{route('organization')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-building"></i></div>
                                Organization
                            </a>

                            

                            <a class="nav-link" href="{{route('report')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-exclamation-circle"></i></div>
                                Report
                            </a>
                            @endif

                           

                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small"></div>
                       
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">

                <main>
                    @yield('content')
                </main>
            </div>    
        </div>
        @include('admin.partial.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{url('Backend/js/scripts.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{url('Backend/assets/demo/chart-area-demo.js')}}"></script>
        <script src="{{url('Backend/assets/demo/chart-bar-demo.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{url('Backend/js/datatables-simple-demo.js')}}"></script>
    </body>
</html>
