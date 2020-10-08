<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Responsive Admin Dashboard Template">
    <meta name="keywords" content="admin,dashboard">
    <meta name="author" content="stacks">

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Rewards Portal - Dashboard</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
    <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/font-awesome/css/all.min.css') }}" rel="stylesheet">


    <!-- Theme Styles -->
    <link href="{{ asset('assets/css/connect.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/admin_teacher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/dark_theme.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    @yield('style')
</head>

<body>
    <!-- <div class='loader'>
        <div class='spinner-grow text-primary' role='status'>
            <span class='sr-only'>Loading...</span>
        </div>
    </div> -->
    <div class="connect-container align-content-stretch d-flex flex-wrap">
        <div class="page-sidebar">
            <center> <img src="{{ asset('assets/images/logo.png') }}" width="100px" height="100px"></center>
            <div class="logo-box"><a href="index.html" class="logo-text"> LeapForWord </a><a href="#"
                    id="sidebar-close"><i class="material-icons">close</i></a> <a href="#" id="sidebar-state"><i
                        class="material-icons">adjust</i><i
                        class="material-icons compact-sidebar-icon">panorama_fish_eye</i></a></div>
            <div class="page-sidebar-inner slimscroll">
                <ul class="accordion-menu">
                    <li class="sidebar-title">
                        Student Reward Portal
                    </li>
                    <li class="{{ 'teacherIndex' == request()->path() ? 'active-page' : '' }}">
                        <a href="../teacherIndex" class="{{ 'teacherIndex' == request()->path() ? 'active' : '' }}"><i class="material-icons-outlined">dashboard</i>Dashboard </a>
                    </li>
                    <li class="{{ 'teacherProfile' == request()->path() ? 'active-page' : '' }}">
                        <a href="../teacherProfile" class="{{ 'teacherProfile' == request()->path() ? 'active' : '' }} "><i class="material-icons-outlined">account_circle</i>Profile</a>
                    </li>
                    <li class="{{ 'teacherActivities' == request()->path() ? 'active-page' : '' }}">
                        <a href="../teacherActivities" class="{{ 'teacherActivities' == request()->path() ? 'active' : '' }}"><i class="material-icons-outlined">inbox</i>Activities</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-container">
            <div class="page-header">
                <nav class="navbar navbar-expand">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav">
                        <li class="nav-item small-screens-sidebar-link">
                            <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('assets/images/avatars/profile-image-1.png') }}" alt="profile image">
                                <span>{{ Auth::user()->name }}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </div>
                        </li>

                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link" id="dark-theme-toggle"><i
                                    class="material-icons-outlined">brightness_2</i><i
                                    class="material-icons">brightness_2</i></a>
                        </li> -->
                    </ul>

                    <div class="navbar-search">
                        <form>
                            <div class="form-group">
                                <input type="text" name="search" id="nav-search" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                </nav>
            </div>
            <div class="page-content">
                <div class="page-info">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Student Reward Portal</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('page')</li>
                        </ol>
                    </nav>
                    <!-- <div class="page-options">
                        <a href="#" class="btn btn-primary">Upgrade</a>
                    </div> -->
                </div>
                <div class="main-wrapper">
                    @yield('content')
                </div>
            </div>
            <div class="page-footer">
                <div class="row">
                    <div class="col-md-12">
                        <center><span class="footer-text">Copyright © 2020 LeapForWord</span></center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Javascripts -->
    <script src="{{ asset('assets/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/blockui/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.time.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.symbol.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.resize.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/js/connect.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>

    @yield('script')
</body>

</html>
