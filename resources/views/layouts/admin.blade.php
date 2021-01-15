
<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin</title>
        <link type="text/css" href="{{ asset('css/admin/css/bootstrap.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
        <link type="text/css" href="{{ asset('css/admin/css/font-awesome.css') }}" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="/manager">
                            GemAdmin
                        </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">
                            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Functions
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="/product/create/create">Add a Product</a></li>
                                    <li><a href="/category/create">Add a Category</a></li>
                                    <li><a href="/admin/create/code">Add a Coupon</a></li>
                                    <li class="divider"></li>
                                    <li class="nav-header">Navigator</li>
                                    <li><a href="/home">Home</a></li>
                                    <li><a href="/product/show">Products</a></li>
                                    <li><a href="/">Welcome</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Support </a></li>
                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('storage/images/admin/user.png') }}" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="divider"></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        @yield('content')

        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
            </div>
        </div>
        <script src="{{ asset('js/admin/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/admin/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('css/admin/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/admin/flot/jquery.flot.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/admin/flot/jquery.flot.resize.js') }}}" type="text/javascript"></script>
        <script src="{{ asset('js/admin/datatables/jquery.dataTables.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/admin/common.js') }}" type="text/javascript"></script>
      
    </body>
