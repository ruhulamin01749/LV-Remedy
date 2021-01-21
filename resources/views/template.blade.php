<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets')}}/images/favicon.png">
    <title>
        @if (isset($title))
            {{config('app.name'). ' | '.$title}}        
        @else
            {{env('APP_NAME')}}
        @endif
    </title>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/jquery-minicolors/jquery.minicolors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/libs/quill/dist/quill.snow.css')}}">
    <link href="{{asset('assets/libs/jquery-steps/jquery.steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/jquery-steps/steps.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/flot/css/float-chart.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/fullcalendar/dist/fullcalendar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/extra-libs/calendar/calendar.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/dist/css/style.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/magnific-popup/dist/magnific-popup.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/extra-libs/multicheck/multicheck.css')}}">
    <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/toastr/build/toastr.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="{{URL::to('/')}}">
                        <!-- Logo icon -->
                        <b class="logo-icon p-l-10">
                            <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo" />
                           
                        </b>
                        <span class="logo-text">
                             <!-- <img src="{{asset('assets')}}/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                             {{config('app.name')}}
                            
                        </span>
                    </a>
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ Auth::user()->name }}
                                <img src="{{asset('assets/images/users/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated">
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email m-r-5 m-l-5"></i> Inbox</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings m-r-5 m-l-5"></i> Account Setting</a>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                <div class="p-l-30 p-10"><a href="javascript:void(0)" class="btn btn-sm btn-success btn-rounded">View Profile</a></div>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        
        @include('menu_sidebar')
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            @yield("main_content")
            
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                @<?php echo date("Y"); ?>. Designed and Developed by <a href="https://ruhulamin.cf">{{env('DEVELOPER','Md.Ruhul Amin')}}</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/popper.js/dist/umd/popper.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{asset('assets/extra-libs/sparkline/sparkline.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('assets/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{asset('assets/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{asset('assets/dist/js/custom.min.js')}}"></script>
    <!-- this page js -->
    
    <script src="{{asset('assets/libs/chart/matrix.interface.js')}}"></script>
    <script src="{{asset('assets/libs/chart/excanvas.min.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/libs/flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets')}}/libs/flot/jquery.flot.stack.js"></script>
    <script src="{{asset('assets')}}/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="{{asset('assets')}}/libs/chart/jquery.peity.min.js"></script>
    <script src="{{asset('assets')}}/libs/chart/matrix.charts.js"></script>
    <script src="{{asset('assets')}}/libs/chart/jquery.flot.pie.min.js"></script>
    <script src="{{asset('assets')}}/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="{{asset('assets')}}/libs/chart/turning-series.js"></script>
    <script src="{{asset('assets')}}/dist/js/pages/chart/chart-page-init.js"></script>

    <script src="{{asset('assets')}}/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="{{asset('assets')}}/dist/js/pages/mask/mask.init.js"></script>
    <script src="{{asset('assets')}}/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="{{asset('assets')}}/libs/select2/dist/js/select2.min.js"></script>
    <script src="{{asset('assets')}}/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="{{asset('assets')}}/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="{{asset('assets')}}/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="{{asset('assets')}}/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="{{asset('assets')}}/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="{{asset('assets')}}/libs/quill/dist/quill.min.js"></script>

    <script src="{{asset('assets')}}/libs/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="{{asset('assets')}}/libs/jquery-validation/dist/jquery.validate.min.js"></script>
    
    <script src="{{asset('assets')}}/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="{{asset('assets')}}/dist/js/jquery-ui.min.js"></script>
  
    <script src="{{asset('assets')}}/libs/moment/min/moment.min.js"></script>
    <script src="{{asset('assets')}}/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="{{asset('assets')}}/dist/js/pages/calendar/cal-init.js"></script>

    <script src="{{asset('assets')}}/libs/toastr/build/toastr.min.js"></script>

    <script src="{{asset('assets')}}/libs/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('assets')}}/libs/magnific-popup/meg.init.js"></script>


    <script src="{{asset('assets')}}/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="{{asset('assets')}}/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="{{asset('assets')}}/extra-libs/DataTables/datatables.min.js"></script>



    <script>
        $(".select2").select2({
            maximumSelectionLength: 4
        });

        $("#category_list").select2({
            multiple:true,
            placeholder: "Choose Categories",
        });


        $(document).ready(function(){
          $('.alert').delay(6000).fadeOut('slow');
        });
        $('#zero_config').DataTable();

        $('#table_sequel').DataTable( {
            "lengthMenu": [[30, 50, 100, -1], [30, 50, 100, "All"]]
        } );
        $('#movies').DataTable( {
            "lengthMenu": [[50, 100,150, -1], [50, 100, 150, "All"]]
        } );
        $('.table').DataTable({
            "lengthMenu": [[20, 30, 50, 100], [20, 30, 50, 100]]
        });
    </script>
    
    

</body>

</html>