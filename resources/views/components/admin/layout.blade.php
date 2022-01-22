<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <title>{{ $title }}</title>
    <link rel="apple-touch-icon" href="{{ asset('assets/admin/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/admin/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/vendors/css/charts/apexcharts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/vendors/css/extensions/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css') }}">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/themes/semi-dark-layout.css') }}">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/core/menu/menu-types/vertical-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/plugins/charts/chart-apex.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/app-assets/css/pages/app-invoice-list.css') }}">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/assets/css/style.css') }}">
    <!-- END: Custom CSS-->
    @livewireStyles
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

@include('admin.partials.header')


@include('admin.partials.main-menu')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            {{ $slot }}

        </div>
    </div>
</div>
<!-- END: Content-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin.partials.footer')


<!-- BEGIN: Vendor JS-->
<script src="{{ asset('assets/admin/app-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{ asset('assets/admin/app-assets/vendors/js/charts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/extensions/moment.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js') }}"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{ asset('assets/admin/app-assets/js/core/app-menu.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/js/core/app.js') }}"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{ asset('assets/admin/app-assets/js/scripts/pages/dashboard-analytics.js') }}"></script>
<script src="{{ asset('assets/admin/app-assets/js/scripts/pages/app-invoice-list.js') }}"></script>
<!-- END: Page JS-->

<script src="{{ asset('assets/admin/app-assets/js/core/custom.js') }}"></script>

<script>
    $(window).on('load', function() {
        if (feather) {
            feather.replace({
                width: 14,
                height: 14
            });
        }
    })
</script>
@include('sweetalert::alert')

<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

<script src="//unpkg.com/alpinejs') }}" defer></script>

@livewireScripts
</body>
<!-- END: Body-->

</html>
