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

                <div style="margin: 100px; " class="row">
                    @foreach($get_directories as $get_directory)
                    <div class="col-xl-4 col-md-6 h-100 d-flex">
                        <div class="card directory-card">
                            <div class="card-body flex-fill">
                                <div class="float-left mr-4">
                                    <img src="images/business_images/{{ $get_directory->image }}" alt="" class="img-fluid img-thumbnail thumb-lg">
                                </div>
                                <h5 class="text-primary font-18 mt-0 mb-1">{{ $get_directory->business_name  }}</h5>
                                <p class="font-12 mb-2"><i class="ti-mobile"></i><strong>Tel.</strong> {{ $get_directory->office_contact }}</p>
                                <p class="mb-4"><i class="ti-map"></i> {{ $get_directory->office_address }}</p>
                                <div class="clearfix"></div>

                                <p class="text-justify"><i class="ti-briefcase"></i> {{ $get_directory->business_description }}</p>
                                <hr>
                                <div class="row">
                                    <div class="col-md-3">
                                            <div class="form-group">
                                                <a href="{{ url('update-directory') }}/{{ $get_directory->id }}" class="btn btn-xs btn-primary">Edit</a>
                                            </div>
                                    </div>
                                    <div class="col-md-3">
                                        <form action="{{ route('remove.directory') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value='{{ $get_directory->id }}'>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    @endforeach
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
