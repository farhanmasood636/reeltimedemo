<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background:linear-gradient(135deg, #2c3f46, #659ba9);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"
                ><i class="fas fa-bars" style="color:#fff !important"></i
            ></a>
        </li>

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

        <li class="nav-item dropdown user user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-cog" style="color:#fff" aria-hidden="true"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <li class="user-footer">
                <div class="pull-left">
                    @if ( Auth::user()->employee )
                    <a href="{{ route('employee.profile') }}" class="btn btn-default btn-flat" style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none; color:#fff;">Profile</a>
                    @else
                    <a href="{{ route('admin.reset-password') }}" class="btn btn-default btn-flat" style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none; color:#fff;">Change Password</a>
                    @endif
                </div>
                <div class="pull-right">
                    <a href="{{ route('logout') }}" 
                    class="btn btn-default btn-flat" style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none; color:#fff;"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                    >Sign out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
                </li>
            </ul>
        </li>
    </ul>
</nav>