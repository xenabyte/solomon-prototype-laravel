<!DOCTYPE html>
<html lang="en">


<head>
        <meta charset="utf-8" />
        <title>Business Directory</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta content="Business Directory" name="description" />
        <meta content="3GIS Test" name="Ogundele Damilare Solomon" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!--Chartist Chart CSS -->
        <link rel="stylesheet" href="plugins/chartist/css/chartist.min.css">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
  <!-- Navigation Bar-->
   <header id="topnav">
            <div class="topbar-main">
                <div class="container-fluid">

                    <!-- Logo container-->
                    <div class="logo">

                        <a href="index-2.html" class="logo">
                            <img src="assets/images/logo-sm.png" alt="" class="logo-small">
                            <img src="assets/images/logo-light.png" alt="" class="logo-large">
                        </a>

                    </div>
                   <div class="menu-extras topbar-custom">
                        <ul class="navbar-right d-flex list-inline float-right mb-0">
                            <li class="dropdown notification-list d-none d-sm-block">
                                <form role="search" class="app-search">
                                    <div class="form-group mb-0">
                                        <input type="text" class="form-control" placeholder="Search..">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </div>
                                </form>
                            </li>

                            <!-- full screen -->
                            <li class="dropdown notification-list d-none d-md-block">
                                <a class="nav-link" href="#" id="btn-fullscreen">
                                    <i class="mdi mdi-fullscreen noti-icon"></i>
                                </a>
                            </li>


                            <li class="dropdown notification-list">
                                <div class="dropdown notification-list">
                                    <a class="dropdown-toggle nav-link arrow-none nav-user" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                        <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                                        <!-- item-->
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item text-danger" href="#"><i class="mdi mdi-power text-danger"></i> Logout</a>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item list-inline-item">
                                <!-- Mobile menu toggle-->
                                <a class="navbar-toggle nav-link">
                                    <div class="lines">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                                <!-- End mobile menu toggle-->
                            </li>

                        </ul>
                    </div>
                    <!-- end menu-extras -->

                    <div class="clearfix"></div>

                </div> <!-- end container -->
            </div>
            <!-- end topbar-main -->

            <!-- MENU Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">

                            <li class="has-submenu">
                                <a href="{{ route('home') }}"><i class="ti-home"></i>Dashboard</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('create_directory') }}"><i class="ti-package"></i>Add Directory</a>

                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('get_directories') }}"><i class="ti-harddrives"></i>Directories</a>
                            </li>

                            <li class="has-submenu">
                                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mdi mdi-power"></i>Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="container-fluid">
                <div class="page-title-box">
                    <div class="row align-items-center">

                            <div class="col-sm-6">
                         <h4 class="page-title">Dashboard</h4>
                         <ol class="breadcrumb">
                            <li class="breadcrumb-item active">Welcome to BusDir Admin Dashboard</li>
                         </ol>
                    </div>

                </div>
            </div>
            <!-- end row -->

            <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/01.png" alt="" >
                                    </div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Business Directories</h5>
                                    <h4 class="font-500">{{ $dir_count }} <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--<div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/02.png" alt="" >
                                    </div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Revenue</h5>
                                    <h4 class="font-500">52,368 <i class="mdi mdi-arrow-down text-danger ml-2"></i></h4>
                                    <div class="mini-stat-label bg-danger">
                                        <p class="mb-0">- 28%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/03.png" alt="" >
                                    </div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Average Price</h5>
                                    <h4 class="font-500">15.8 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    <div class="mini-stat-label bg-info">
                                        <p class="mb-0"> 00%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-left mini-stat-img mr-4">
                                        <img src="assets/images/services-icon/04.png" alt="" >
                                    </div>
                                    <h5 class="font-16 text-uppercase mt-0 text-white-50">Product Sold</h5>
                                    <h4 class="font-500">2436 <i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    <div class="mini-stat-label bg-warning">
                                        <p class="mb-0">+ 84%</p>
                                    </div>
                                </div>
                                <div class="pt-2">
                                    <div class="float-right">
                                        <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>-->
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="py-4">
                                            <i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>
                                            <h5 class="text-primary mt-4"></h5>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-center text-white py-4">
                                            <h5 class="mt-0 mb-4 text-white-50 font-16"></h5>
                                            <h1>1452</h1>
                                            <p class="text-white-50 mb-0"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <div class="py-4">
                                            <i class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                            <h5 class="text-primary mt-4"></h5>
                                            <p class="text-muted"></p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="card bg-primary">
                                    <div class="card-body">
                                        <div class="text-center text-white py-4">
                                            <h5 class="mt-0 mb-4 text-white-50 font-16"></h5>
                                            <h1>1452</h1>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
        </div>
    </div>
    <!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                2019  © 3GIS TEST
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
    <!-- App's Basic Js  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/waves.min.js"></script>

 <!--Chartist Chart-->
<script src="plugins/chartist/js/chartist.min.js"></script>
<script src="plugins/chartist/js/chartist-plugin-tooltip.min.js"></script>
<!-- peity JS -->
<script src="plugins/peity-chart/jquery.peity.min.js"></script>
<script src="assets/pages/dashboard.js"></script>

<!-- App js-->
<script src="assets/js/app.js"></script>

    </body>
</html>
