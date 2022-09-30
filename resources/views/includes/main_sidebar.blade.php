<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<aside class="main-sidebar sidebar-dark-primary elevation-4" style = "background:linear-gradient(135deg, #2c3f46, #659ba9); z-index: 1040 !important;">
    <a 
    @can('admin-access')
        href="{{ route('admin.index') }}"
    @endcan
    @can('employee-access')
        href="{{ route('employee.index') }}"
    @endcan
    class="brand-link text-center">
    <img
            src="/img/logo.png"
            alt="ReelTime Logo"
            class="img-fluid img-circle elevation-3"
            style="opacity: 0.8; height:90px; width:150px;"
        />
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul
                class="nav nav-pills nav-sidebar flex-column"
                data-widget="treeview"
                role="menu"
                data-accordion="false"
            >
                @can('admin-access')
                @include('includes.admin.sidebar_items')
                @endcan
                @can('employee-access')
                @include('includes.employee.sidebar_items')
                @endcan
            </ul>
        </nav>
    </div>
</aside>
</body>
</html>