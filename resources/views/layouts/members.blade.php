<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="{{URL::asset('images/favicons/favicon-96x96.png')}}">
    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{URL::asset('../frontend/bower_components/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{URL::asset('../frontend/metisMenu/dist/metisMenu.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('../frontend/css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
{{--<link href="{{URL::asset('../frontend/css/timeline.css')}}" rel="stylesheet">--}}

<!-- Custom Fonts -->
    <link href="{{URL::asset('../frontend/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet"
          type="text/css">

    <!-- Datatables CSS -->
    <link href="{{URL::asset('../frontend/css/bootstrap-table.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{URL::asset('../frontend/css/authorized.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

<!--[if lt IE 9] >
             <script src="http://html5shiv.googlecode/svn/trunk/html5.js"></script>
             <script src="{{URL::asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
             <script src="{{URL::asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
             <script>$('div.alert').not('.alert_important').(300).slideUp(300)</script>
     <!][endif] -->

@section('page_css')
    @yield('css')
@show

    <!-- ckeditor JavaScript -->
    <script src="{{URL::asset('../frontend/ckeditor/ckeditor.js')}}"></script>

<!--[if lt IE 9] >
             <script src="http://html5shiv.googlecode/svn/trunk/html5.js"></script>
             <script src="{{URL::asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
             <script src="{{URL::asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
             <script>$('div.alert').not('.alert_important').(300).slideUp(300)</script>
     <!][endif] -->
</head>

<body>
<div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{URL::asset('home')}}">
                    <span>
                        <img src="{{url('../webview/img/unzabeca.jpg')}}" height="35px" width="30px" style="padding-bottom:5px">
                    </span>
                UNZABECA
            </a>

        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i>
                    <!-- user names here -->
                     <b class="caret"></b>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="{{url('/members/my_profile')}}"><i class="fa fa-user fa-fw"></i>My Profile</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{url('register')}}"><i class="fa fa-edit fa-fw"></i>Register New User</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ url('logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">

                <ul class="nav" id="side-menu">
                    {{--<li class="active-link">--}}
                        {{--<a href="{{url('/members/overview')}}"><i class="fa fa-desktop "></i>  Overview</a>--}}
                  {{--</li>--}}
                    <li class="active-link">
                        <a href="{{url('/members/articles')}}"><i class="fa fa-file "></i>  Articles</a>
                    </li>
                    <li>
                        <a href="{{url('/members/events')}}"><i class="fa fa-calendar "></i>  Events</a>
                    </li>
                    <li>
                        <a href="{{url('/alumni/viewAlumni')}}"><i class="fa fa-users "></i> Alumni</a>
                    </li>
                    <li>
                        <a href="{{url('/members/viewMembers')}}"><i class="fa fa-user-md "></i>  Members</a>
                    </li>
                    <li>
                        <a href="{{url('/members/committees/viewAll')}}"><i class="fa fa-group"></i> Committees</a>
                    </li>
                    <li>
                        <a href="{{url('/members/resources')}}"><i class="fa fa-folder-open "></i>  Resources </a>
                    </li>
                    {{--<li>--}}
                        {{--  <a href="{{url('/members/reports/auto')}}"><i class="fa fa-qrcode "></i>Auto reports</a>--}}
                    {{--</li>--}}
                <!-- /.nav-second-level -->
                    <!--future menus for other users can be included here-->
                </ul>

            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                {{--<img class="center block  pull-right img-circle img-responsive" src="{{ URL::asset('frontend/img/logo.png') }}">--}}
                <h4 class="page-header">
                    <div class="pull-right"></div>
                    @if(Session::has('flash_message'))
                        <div class="alert alert-success {{session()->has('flash_message_important')? session('flash_message') : ''}}">
                            {{Session::get('flash_message')}}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @if(session()->has('flash_message_important'))

                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            @endif
                        </div>
                    @endif
                </h4>
            </div>
            <!-- /.col-lg-12 -->
        </div><!-- /.row -->
    @section('main_content')

        <!-- success flash message -->
        @if(session('status'))
            <div class="alert alert-success col-md-10">
                {{ session('status') }}
            </div>
        @endif

            <!-- content injected here -->
            @yield('content')
    </div>
    <!-- /#page-wrapper -->
    @show
</div>
<!-- /#wrapper -->

<!-- Footer -->
<footer class="footer footer-fixed-bottom">
    <div class="container" style="text-align:center">
        <p class="text-muted"><span class="glyphicon glyphicon-copyright-mark"></span> - {{\Carbon\Carbon::now()->year}} Unzabeca
            <br> All rights reserved.</p>
    </div>
</footer>
<!-- ./footer -->
<!-- jQuery -->
@section('scripts')

    <!-- jQuery -->
    <script src="{{URL::asset('../frontend/js/jquery-2.1.4.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{URL::asset('../frontend/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{URL::asset('../frontend/metisMenu/dist/metisMenu.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{URL::asset('../frontend/js/sb-admin-2.js')}}"></script>

    <!-- Datatables JavaScript -->
    <script src="{{URL::asset('../frontend/js/bootstrap-table.js')}}"></script>

    <!-- Custom JavaScript -->
    <script src="{{URL::asset('../frontend/js/authorized.js')}}"></script>
    <script src="{{URL::asset('../frontend/js/custom.js')}}"></script>
    <script>
        $('div.alert').not('.alert-important').delay(6000).slideUp(300);
    </script>

@show

<script>
    !function ($) {
        $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
            $(this).find('em:first').toggleClass("glyphicon-minus");
        });
        $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
    }(window.jQuery);

    $(window).on('resize', function () {
        if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
    });
    $(window).on('resize', function () {
        if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
    })

</script>

@show
</body>
</html>
