<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keyword" content="">
    <meta name="author" content="theme_ocean">
    <!--! The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags !-->
    <!--! BEGIN: Apps Title-->
    <title>Pemerintah Desa Pelaga</title>
    <!--! END:  Apps Title-->
    <!--! BEGIN: Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="build/assets/images/favicon.ico">
    <!--! END: Favicon-->
    <!--! BEGIN: Bootstrap CSS-->
    <link rel="stylesheet" type="text/css" href="build/assets/css/bootstrap.min.css">
    <!--! END: Bootstrap CSS-->
    <!--! BEGIN: Vendors CSS-->
    <link rel="stylesheet" type="text/css" href="build/assets/vendors/css/vendors.min.css">
    <link type="text/css" rel="stylesheet" href="build/assets/vendors/css/tui-calendar.min.css">
    <link type="text/css" rel="stylesheet" href="build/assets/vendors/css/tui-theme.min.css">
    <link type="text/css" rel="stylesheet" href="build/assets/vendors/css/tui-time-picker.min.css">
    <link type="text/css" rel="stylesheet" href="build/assets/vendors/css/tui-date-picker.min.css">
    <link rel="stylesheet" type="text/css" href="build/assets/vendors/css/daterangepicker.min.css" />
    <!--! END: Vendors CSS-->
    <!--! BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="build/assets/css/theme.min.css">
    <!--! END: Custom CSS-->
    <!--! HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries !-->
    <!--! WARNING: Respond.js doesn"t work if you view the page via file: !-->
    <!--[if lt IE 9]>
			<script src="https:oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https:oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

<body>
    <!--! ================================================================ !-->
    <!--! [Start] Navigation Manu !-->
    <!--! ================================================================ !-->
    @include('admini.sidebar')
    <!--! ================================================================ !-->
    <!--! [End]  Navigation Manu !-->
    <!--! ================================================================ !-->
    <!--! ================================================================ !-->
    <!--! [Start] Header !-->
    <!--! ================================================================ !-->
    @include('admini.header')
    <!--! ================================================================ !-->
    <!--! [End] Header !-->
    <!--! ================================================================ !-->
   
            @yield('content')

       <script src="build/assets/vendors/js/vendors.min.js"></script>
    <!-- vendors.min.js {always must need to be top} -->
   
    <script src="build/assets/vendors/js/moment.min.js"></script>
    <script src="build/assets/vendors/js/chance.min.js"></script>
    
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="build/assets/js/common-init.min.js"></script>
    <script src="build/assets/js/apps-calendar-init.min.js"></script>
    <!--! END: Apps Init !-->
    <!--! BEGIN: Theme Customizer  !-->
    <script src="build/assets/js/theme-customizer-init.min.js"></script>
    <!--! END: Theme Customizer !-->
    <script src="build/assets/vendors/js/daterangepicker.min.js"></script>
    <script src="build/assets/vendors/js/apexcharts.min.js"></script>
    <script src="build/assets/vendors/js/circle-progress.min.js"></script>
    <!--! END: Vendors JS !-->
    <!--! BEGIN: Apps Init  !-->
    <script src="build/assets/js/common-init.min.js"></script>
    <script src="build/assets/js/dashboard-init.min.js"></script>
    <!--! END: Apps Init !-->

    
</body>

</html>