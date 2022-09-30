<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="csrf-token" content="{{ Session::token() }}"> 
        @yield('title')
        <link rel="icon"type="image/x-icon" href="/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link
            rel="stylesheet"
            href="/plugins/fontawesome-free/css/all.min.css"
        />
        <link
            rel="stylesheet"
            href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
        />
        <link rel="stylesheet" href="/dist/css/font-awesome.min.css">
                <link rel="stylesheet" href="/dist/css/adminlte.min.css" />
        <link
            rel="stylesheet"
            href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
        />
                <link rel="stylesheet" href="/plugins/summernote/summernote-bs4.css" />
        <link
            href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
            rel="stylesheet"
        />
    <link
    rel="stylesheet"
    href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
    rel="stylesheet"
    href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <style>
        .hide-input {
            display: none;
        }
        .proftable tr td:first-child {
            font-weight: bold;
            color: rgb(11, 72, 138);
        }
        
        .wrapper,.content-wrapper{
            background:linear-gradient(135deg, #2c3f46, #659ba9);;
        }
    </style>
    </head>
        @guest

        <body class="hold-transition login-page">
            @yield('content')

        @else
        @if (Route::currentRouteName() == 'password.request' || Route::currentRouteName() == 'password.reset' || Route::currentRouteName() == 'password.confirm')
        <body class="hold-transition login-page">
            @yield('content')
        @else
        <body class="hold-transition sidebar-mini layout-fixed">

            <div class="wrapper">
                @include('includes.navbar')
                @include('includes.main_sidebar')
                <div class="content-wrapper">
                @yield('content')
                </div>
                <aside class="control-sidebar control-sidebar-dark">
                </aside>
            </div>
        @endif
        
        @endguest

        <script src="/plugins/jquery/jquery.min.js"></script>
        <script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge("uibutton", $.ui.button);
        </script>
        <script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/plugins/summernote/summernote-bs4.min.js"></script>
        <script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <script src="/dist/js/adminlte.js"></script>
        <script src="/dist/js/demo.js"></script>
        <script src="/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="/plugins/moment/moment.min.js"></script>
        <script src="/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
        <script src="/plugins/daterangepicker/daterangepicker.js"></script>
        @yield('extra-js')
    </body>
</html>
