<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dashboard | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />

        <!-- STYLES -->
        <!-- Daterangepicker css -->
        <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
        <!-- Vector Map css -->
        <link rel="stylesheet" href="{{ asset('plugins/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css') }}">
        <!-- App css -->
        <link href="{{ asset('css/app-saas.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />
        <!-- Icons css -->
        <link href="{{ asset('css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- JS ON HEAD -->
        <!-- Theme Config Js -->
        <script src="{{ asset('js/hyper-config.js') }}" defer></script>
        @routes
        @vite([
            'resources/js/app.js',
            "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia

        <!-- Theme Settings -->
        @include('layouts.theme.hyper-saas')

        <!-- JS -->
        <!-- Vendor js -->
        <script src="{{ asset('js/vendor.min.js') }}" defer></script>
        <!-- Daterangepicker js -->
        <script src="{{ asset('plugins/daterangepicker/moment.min.js') }}" defer></script>
        <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}" defer></script>
        <!-- Apex Charts js -->
        <script src="{{ asset('plugins/apexcharts/apexcharts.min.js') }}" defer></script>
        <!-- Vector Map js -->
        <script src="{{ asset('plugins/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js') }}" defer></script>
        <script src="{{ asset('plugins/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js') }}" defer></script>
        <!-- App js -->
        <script src="{{ asset('js/app.min.js') }}" defer></script>
        <!-- Dashboard App js -->
        <script src="{{ asset('js/pages/demo.dashboard.js') }}" defer></script>
        <!-- Main Js -->
        <script src="{{ asset('js/main.js') }}" defer></script>
    </body>
</html>
