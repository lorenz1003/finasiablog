<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Finasia') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen font-sans antialiased leading-none bg-gray-100">
    <div id="app">


                <!-- Navbar -->
                <nav class="main-header navbar navbar-expand navbar-dark" style="position: sticky;">
                  <!-- Left navbar links -->

                  <!-- Right navbar links -->
                  <ul class="ml-auto navbar-nav">
                    <!-- Navbar Search -->


                    <!-- Messages Dropdown Menu -->

                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <img src="https://www.finasialand.net/assets/backend/custom/img/avatar-01.jpg"
                        class="pt-0 mt-0 brand-image img-circle elevation-3 w-9" alt="">
                      </a>
                      <div class="mt-2 dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        @guest
                        @if (Route::has('register'))

                        @endif
                    @else
                        <span class="pt-5 pb-3 text-center dropdown-item dropdown-header text-bold"><img src="https://www.finasialand.net/assets/backend/custom/img/avatar-01.jpg"
                            class="pt-1 mb-3 img-circle elevation-3 w-80" alt="">{{ Auth::user()->name }}</span>
                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}"
                           class="float-right mt-2 mb-3 mr-3 no-underline btn btn-info btn-s text-bold hover:underline"
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest




                        {{--

                        <a href="#" class="dropdown-item">
                          <i class="mr-2 fas fa-envelope"></i> 4 new messages
                          <span class="float-right text-sm text-muted">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <i class="mr-2 fas fa-users"></i> 8 friend requests
                          <span class="float-right text-sm text-muted">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                          <i class="mr-2 fas fa-file"></i> 3 new reports
                          <span class="float-right text-sm text-muted">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                      </div> --}}
                    </li>
                  </ul>
                </nav>
                <!-- /.navbar -->

                  <!-- Google Font: Source Sans Pro -->
                  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
                  <!-- Font Awesome Icons -->
                  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
                  <!-- overlayScrollbars -->
                  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
                  <!-- Theme style -->
                  <link rel="stylesheet" href="dist/css/adminlte.min.css">
                </head>
                <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
                <div class="wrapper">

                  <!-- Preloader -->
                  <div class="preloader flex-column justify-content-center align-items-center">
                    <img class="animation__wobble" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
                  </div>



                  <!-- Main Sidebar Container -->

                  <!-- Content Wrapper. Contains page content -->

                  <!-- /.content-wrapper -->

                  <!-- Control Sidebar -->
                  <aside class="control-sidebar control-sidebar-dark">
                    <!-- Control sidebar content goes here -->
                  </aside>
                  <!-- /.control-sidebar -->


                </div>
                <!-- ./wrapper -->

                <!-- REQUIRED SCRIPTS -->
                <!-- jQuery -->
                <script src="plugins/jquery/jquery.min.js"></script>
                <!-- Bootstrap -->
                <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
                <!-- overlayScrollbars -->
                <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
                <!-- AdminLTE App -->
                <script src="dist/js/adminlte.js"></script>

                <!-- PAGE PLUGINS -->
                <!-- jQuery Mapael -->
                <script src="plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
                <script src="plugins/raphael/raphael.min.js"></script>
                <script src="plugins/jquery-mapael/jquery.mapael.min.js"></script>
                <script src="plugins/jquery-mapael/maps/usa_states.min.js"></script>
                <!-- ChartJS -->
                <script src="plugins/chart.js/Chart.min.js"></script>

                <!-- AdminLTE for demo purposes -->
                <script src="dist/js/demo.js"></script>
                <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
                <script src="dist/js/pages/dashboard2.js"></script>




                <aside class="h-full main-sidebar sidebar-dark-primary pb-96 mb-96 elevation-4">
                    <!-- Brand Logo -->
                    <a href="/home" class="brand-link">
                      <img src="https://www.finasialand.net/assets/img/logos/finasia_logo.svg" alt="AdminLTE Logo" class="w-auto brand-image" style="opacity: .8">
                       <span class="brand-text text-bold">FinasiaLand</span>
                    </a>

                    <!-- Sidebar -->
                    <div class="sidebar">
                      <!-- Sidebar user panel (optional) -->
                        <br>

                      <!-- SidebarSearch Form -->
                      <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                          <div class="input-group-append">
                            <button class="btn btn-sidebar">
                              <i class="fas fa-search fa-fw"></i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <!-- Sidebar Menu -->
                      <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                          <!-- Add icons to the links using the .nav-icon class
                               with font-awesome or any other icon font library -->

                            <a href="/home" class="nav-link active">
                              <i class="nav-icon fas fa-tachometer-alt"></i>
                              <p class="text-6l text-bold">
                                Dashboard
                              </p>
                            </a>
                          <li class="nav-item">
                            <a href="users" class="nav-link">
                              <i class="nav-icon fas fa-users"></i>
                              <p class="text-bold">
                                Users
                              </p>
                            </a>
                          </li>
                          <li class="nav-header">Pages</li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-edit"></i>
                              <p>
                                Properties
                                <i class="fas fa-angle-left right"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="details" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Details</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="pages/forms/advanced.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Floors</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="pages/forms/editors.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Nearby Establishment</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="pages/forms/validation.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Galleries</p>
                                </a>
                              </li>
                            </ul>
                          </li>
                          <li class="nav-item">
                            <a href="#" class="nav-link">
                              <i class="nav-icon fas fa-table"></i>
                              <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                              </p>
                            </a>
                            <ul class="nav nav-treeview">
                              <li class="nav-item">
                                <a href="pages/tables/simple.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Simple Tables</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="pages/tables/data.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>DataTables</p>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a href="pages/tables/jsgrid.html" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>jsGrid</p>
                                </a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </nav>
                      <!-- /.sidebar-menu -->
                    </div>
                    <!-- /.sidebar -->
                  </aside>


        <div>
            @yield('content')
        </div>

        <div>
            @include('layouts.footer_admin')
        </div>
    </div>
</body>
</html>
