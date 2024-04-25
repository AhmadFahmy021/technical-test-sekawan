<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>VEHICLE APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{ asset('assets/plugins') }}/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins') }}/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins') }}/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins') }}/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('layout.admindash.topbar')

        <!-- ========== Left Sidebar Start ========== -->
        @include('layout.admindash.sidebar')
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
               @yield('main')
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2019 © Xacton.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Overlay-->
    <div class="menu-overlay"></div>


    <!-- jQuery  -->
    <script src="{{ asset('assets') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assets') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets') }}/js/metismenu.min.js"></script>
    <script src="{{ asset('assets') }}/js/waves.js"></script>
    <script src="{{ asset('assets') }}/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="{{ asset('assets/plugins') }}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/buttons.flash.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/dataTables.select.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('assets/plugins') }}/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('assets') }}/pages/datatables-demo.js"></script>


    <!-- App js -->
    <script src="{{ asset('assets') }}/js/theme.js"></script>

    <!-- Morris Js-->
    <script src="{{ asset('assets/plugins') }}/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="{{ asset('assets/plugins') }}/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="{{ asset('assets') }}/pages/dashboard-demo.js"></script>
   

</body>
