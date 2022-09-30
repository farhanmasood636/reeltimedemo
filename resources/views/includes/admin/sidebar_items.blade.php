<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
<li class="nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fa fa-users" style="color:#fff !important"></i>
        <p >
            Employees
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        <li class="nav-item">
            <a
                href="{{ route('admin.employees.create') }}"
                class="nav-link"
            >
                <i class="fas fa-user-plus nav-icon" style="color:#fff !important;"></i>
                <p>Add Employee</p>
            </a>
        </li>
        <li class="nav-item">
            <a
                href="{{ route('admin.employees.index') }}"
                class="nav-link"
            >
                <i class="fa fa-list nav-icon own-color" style="color:#fff !important;"></i>
                <p >List Employees</p>
            </a>
        </li>
    </ul>
</li>
</body>
</html>