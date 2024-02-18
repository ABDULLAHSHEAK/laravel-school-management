<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Fastkart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Fastkart admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('admin')}}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('admin')}}/images/favicon.png" type="image/x-icon">
    <title>Fastkart - Dashboard</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Linear Icon css -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/linearicon.css">

    <!-- fontawesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/font-awesome.css">

    <!-- Themify icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/themify.css">

    <!-- ratio css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/ratio.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/remixicon.css">

    <!-- Feather icon css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/feather-icon.css">

    <!-- Plugins css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/animate.css">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vendors/bootstrap.css">

    <!-- vector map css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/vector-map.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/vendors/slick.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin')}}/css/style.css">
</head>

<body>
    @include('sweetalert::alert')
    <!-- tap on top start -->
    <div class="tap-top">
        <span class="lnr lnr-chevron-up"></span>
    </div>
    <!-- tap on tap end -->

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
       @include('Dashboard.components.navbar')
        <!-- Page Header Ends-->

        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            @include('Dashboard.components.sidebar')
            <!-- Page Sidebar Ends-->

            <!-- index body start -->
            <div class="page-body">

                <!-- Container-fluid Ends-->
                @yield('content')
                <!-- footer start-->
                @include('Dashboard.components.footer')
                <!-- footer End-->
            </div>
            <!-- index body end -->

        </div>
        <!-- Page Body End -->
    </div>
    <!-- page-wrapper End-->

    <!-- Modal Start -->
    @include('Dashboard.modal.logout')
    <!-- Modal End -->

    <!-- latest js -->
    <script src="{{asset('admin')}}/js/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap js -->
    <script src="{{asset('admin')}}/js/bootstrap/bootstrap.bundle.min.js"></script>

    <!-- feather icon js -->
    <script src="{{asset('admin')}}/js/icons/feather-icon/feather.min.js"></script>
    <script src="{{asset('admin')}}/js/icons/feather-icon/feather-icon.js"></script>

    <!-- scrollbar simplebar js -->
    <script src="{{asset('admin')}}/js/scrollbar/simplebar.js"></script>
    <script src="{{asset('admin')}}/js/scrollbar/custom.js"></script>

    <!-- Sidebar jquery -->
    <script src="{{asset('admin')}}/js/config.js"></script>

    <!-- tooltip init js -->
    <script src="{{asset('admin')}}/js/tooltip-init.js"></script>

    <!-- Plugins JS -->
    <script src="{{asset('admin')}}/js/sidebar-menu.js"></script>
    <script src="{{asset('admin')}}/js/notify/bootstrap-notify.min.js"></script>
    <script src="{{asset('admin')}}/js/notify/index.js"></script>

    <!-- Apexchar js -->
    <script src="{{asset('admin')}}/js/chart/apex-chart/apex-chart1.js"></script>
    <script src="{{asset('admin')}}/js/chart/apex-chart/moment.min.js"></script>
    <script src="{{asset('admin')}}/js/chart/apex-chart/apex-chart.js"></script>
    <script src="{{asset('admin')}}/js/chart/apex-chart/stock-prices.js"></script>
    <script src="{{asset('admin')}}/js/chart/apex-chart/chart-custom1.js"></script>


    <!-- slick slider js -->
    <script src="{{asset('admin')}}/js/slick.min.js"></script>
    <script src="{{asset('admin')}}/js/custom-slick.js"></script>

    <!-- customizer js -->
    <script src="{{asset('admin')}}/js/customizer.js"></script>

    <!-- ratio js -->
    <script src="{{asset('admin')}}/js/ratio.js"></script>

    <!-- sidebar effect -->
    <script src="{{asset('admin')}}/js/sidebareffect.js"></script>

    <!-- Theme js -->
    <script src="{{asset('admin')}}/js/script.js"></script>
    {{-- -- CK Editor -- --}}
        <!-- ck editor js -->
    <script src="{{asset('admin')}}/js/ckeditor.js"></script>
    <script src="{{asset('admin')}}/js/ckeditor-custom.js"></script>
    {{-- ------- sweet alert --------  --}}
    <script src="{{asset('admin')}}/js/swetalert.js"></script>

</body>

</html>
