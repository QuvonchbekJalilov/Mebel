<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Dashboard | Miracle Tour</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="/frontend/images/icon.png">

    <link href="/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/config.js"></script>
    

</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">
        <x-header></x-header>
        <div class="px-3">
            {{ $slot }}
        </div>
        <x-footer></x-footer>
    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- App js -->
    <script src="/assets/js/vendor.min.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- Knob charts js -->
    <script src="/assets/libs/jquery-knob/jquery.knob.min.js"></script>

    <!-- Sparkline Js-->
    <script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="/assets/libs/morris.js/morris.min.js"></script>

    <script src="/assets/libs/raphael/raphael.min.js"></script>

    <!-- Dashboard init-->
    <script src="/assets/js/pages/dashboard.js"></script>

</body>

</html>