<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Mono - Responsive Admin & Dashboard Template</title>
    <!-- theme meta -->
    <meta name="theme-name" content="mono" />
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700|Roboto" rel="stylesheet">
    <link href="{{ asset('build/assets/dashboard/plugins/material/css/materialdesignicons.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('build/assets/dashboard/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('build/assets/dashboard/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
    <link
        href="{{ asset('build/assets/dashboard/plugins/DataTables/DataTables-1.10.18/css/jquery.dataTables.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('build/assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"
        rel="stylesheet" />
    <link href="{{ asset('build/assets/dashboard/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="{{ asset('build/assets/dashboard/plugins/toaster/toastr.min.css') }}" rel="stylesheet" />
    <!-- MONO CSS -->
    <link id="main-css-href" rel="stylesheet" href="{{ asset('build/assets/dashboard/css/style.css') }}" />
    <!-- FAVICON -->
    <link href="images/favicon.png" rel="shortcut icon" />
    <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <script src="{{ asset('build/assets/dashboard/plugins/nprogress/nprogress.js') }}"></script>
</head>

<body class="navbar-fixed sidebar-fixed" id="body">
    <script>
        NProgress.configure({
            showSpinner: false
        });
        NProgress.start();
    </script>
    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
        <!-- ====================================
          ——— LEFT SIDEBAR WITH OUT FOOTER
        ===================================== -->
        @include('Dashboard.aside')
        @yield('content')
        <script src="{{ asset('build/assets/dashboard/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/simplebar/simplebar.min.js') }}"></script>
        <script src="https://unpkg.com/hotkeys-js/dist/hotkeys.min.js"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/apexcharts/apexcharts.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/DataTables/DataTables-1.10.18/js/jquery.dataTables.min.js') }}">
        </script>
        <script src="{{ asset('build/assets/dashboard/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/jvectormap/jquery-jvectormap-us-aea.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/daterangepicker/moment.min.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script>
            jQuery(document).ready(function() {
                jQuery('input[name="dateRange"]').daterangepicker({
                    autoUpdateInput: false,
                    singleDatePicker: true,
                    locale: {
                        cancelLabel: 'Clear'
                    }
                });
                jQuery('input[name="dateRange"]').on('apply.daterangepicker', function(ev, picker) {
                    jQuery(this).val(picker.startDate.format('MM/DD/YYYY'));
                });
                jQuery('input[name="dateRange"]').on('cancel.daterangepicker', function(ev, picker) {
                    jQuery(this).val('');
                });
            });
        </script>
        <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
        <script src="{{ asset('build/assets/dashboard/plugins/toaster/toastr.min.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/js/mono.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/js/chart.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/js/map.js') }}"></script>
        <script src="{{ asset('build/assets/dashboard/js/custom.js') }}"></script>

</body>

</html>
