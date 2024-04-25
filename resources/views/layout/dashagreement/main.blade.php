<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Xacton - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="MyraStudio" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assetsAgree') }}/images/favicon.ico">

    <!-- Plugins css -->
    <link href="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsAgree') }}/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsAgree') }}/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsAgree') }}/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assetsAgree') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsAgree') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assetsAgree') }}/css/theme.min.css" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <div class="main-content">

            @include('layout.dashagreement.topbar')

            @include('layout.dashagreement.topnav')

            <div class="page-content">
                <div class="container-fluid">
                    @yield('main')



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="text-center text-lg-left">
                                2019 © Xacton.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="text-right d-none d-lg-block">
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


    <!-- jQuery  -->
    <script src="{{ asset('assetsAgree') }}/js/jquery.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/js/waves.js"></script>
    <script src="{{ asset('assetsAgree') }}/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/buttons.html5.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/buttons.flash.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/buttons.print.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/dataTables.select.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/pdfmake.min.js"></script>
    <script src="{{ asset('assetsAgree') }}/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="{{ asset('assets') }}/pages/datatables-demo.js"></script>

    <!-- Morris Js-->
    <script src="{{ asset('assetsAgree') }}/plugins/morris-js/morris.min.js"></script>
    <!-- Raphael Js-->
    <script src="{{ asset('assetsAgree') }}/plugins/raphael/raphael.min.js"></script>

    <!-- Morris Custom Js-->
    <script src="{{ asset('assetsAgree') }}/pages/dashboard-demo.js"></script>


    <!-- App js -->
    <script src="{{ asset('assetsAgree') }}/js/theme.js"></script>

</body>

</html>
