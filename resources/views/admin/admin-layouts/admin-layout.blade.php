<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
<<<<<<< HEAD
    {{-- <link href="{{ asset('dashboard-assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css"> --}}
=======
    {{-- font awesome --}}
    {{-- <link href="{{ asset('assets-new/all.min.css') }}" rel="stylesheet" type="text/css"> --}}
    {{-- google fonts --}}
>>>>>>> d01be7bd6af2722bc4bd99f35181ff8ce2ab2b6c
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
<<<<<<< HEAD
    {{-- <link href="{{ asset('dashboard-assets/css/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
=======
    {{-- <link href="{{ asset('assets-new/sb-admin-2.min.css') }}" rel="stylesheet"> --}}
>>>>>>> d01be7bd6af2722bc4bd99f35181ff8ce2ab2b6c
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body id="page-top" {{--onload="mp_initialize();"--}}>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('welcome') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Visit Site</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('adminHome') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('showUsers') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Show All Users</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('addUser') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Add New User</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('showAddresses') }}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Show All Addresses</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
    <!-- End of Sidebar -->


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                        <img class="img-profile rounded-circle"
                            src="img/undraw_profile.svg">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                        aria-labelledby="userDropdown">

                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                        </a>
                    </div>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->

        @yield('content')

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>

        <!-- Bootstrap core JavaScript-->
<<<<<<< HEAD
        {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> --}}
        {{-- <script src="{{ asset('dashboard-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}

        <!-- Core plugin JavaScript-->
        {{-- <script src="{{ asset('dashboard-assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script> --}}

        <!-- Custom scripts for all pages-->
        {{-- <script src="{{ asset('dashboard-assets/js/sb-admin-2.min.js') }}"></script> --}}

        <!-- Page level plugins -->
        {{-- <script src="{{ asset('dashboard-assets/vendor/chart.js/Chart.min.js') }}"></script> --}}

        <!-- Page level custom scripts -->
        {{-- <script src="{{ asset('dashboard-assets/js/demo/chart-area-demo.js') }}"></script> --}}
        {{-- <script src="{{ asset('dashboard-assets/js/demo/chart-pie-demo.js') }}"></script> --}}
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmB0LDaMj2JkSi0SZwc0DKExwE_dCCXQk&v=weekly" async></script>
        <script src="{{ asset('js/app.js') }}"></script>
=======
        {{-- <script src="{{ asset('assets-new/jquery.min.js') }}"></script>
        <script src="{{ asset('assets-new/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('assets-new/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('assets-new/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('assets-new/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('assets-new/chart-area-demo.js') }}"></script>
        <script src="{{ asset('assets-new/chart-pie-demo.js') }}"></script> --}}
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDmB0LDaMj2JkSi0SZwc0DKExwE_dCCXQk&v=weekly" async></script>
        {{-- <script src="{{ asset('assets-new/maps.js') }}"></script> --}}
        <script src="{{ asset('js/app.js') }}"></script>

>>>>>>> d01be7bd6af2722bc4bd99f35181ff8ce2ab2b6c

    </body>

</html>
