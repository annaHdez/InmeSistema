<!doctype html>
<html lang="en">
    <head >
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content = "">
        <meta name="author" content = "">
        <title>@yield("titulo") Sistema Inmekha</title>

        <!-- Favicon icon -->
        <link rel="icon" type="image/gif" sizes="16x16" href="{{asset("imagenes/favicon.gif")}}">

            <!-- Custom CSS -->
            <!-- Custom CSS -->
            <link href="{{asset("assets/back/css/style.min.css" )}}" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body >
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full" style ="background-color: #040424">

            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
                @include('layouts.header.top_header')
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
                @include('layouts.header.aside')
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->

            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper" >
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                    @include('layouts.footer.footer')
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
        <!-- All Jquery -->
        <!-- ============================================================== -->
            <script src="{{asset("assets/back/libs/jquery/dist/jquery.min.js")}}"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="{{asset("assets/back/libs/bootstrap/dist/js/bootstrap.bundle.min.js")}}"></script>
            <script src="{{asset("assets/back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
            <script src="{{asset("assets/back/extra-libs/sparkline/sparkline.js" )}}"></script>
            <!--Wave Effects -->
            <script src="{{asset("assets/back/js/waves.js" )}}"></script>
            <!--Menu sidebar -->
            <script src="{{asset("assets/back/js/sidebarmenu.js" )}}"></script>
            <!--Custom JavaScript -->
            <script src="{{asset("assets/back/js/custom.min.js" )}}"></script>
    </body>
</html>
