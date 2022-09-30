@extends('layouts.app')        

@section('content')

@section('title')
<title>Profile</title>
@endsection

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12 own-alignment">
                <h1 class="m-0" style="color:#fff">My Profile</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card" style="background:#fff;">
                    <div class="card-header">
                        <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a>
                        <h5 class="text-center mt-2">Personal Data</h5>
                    </div>
                    <div class="card-body">
                        @include('messages.alerts')
                        <table class="table profile-table table-hover">
                            <tr>
                                <td>First Name</td>
                                <td>{{$employee->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{ $employee->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $email }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $employee->gender }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="card-footer text-center"  style="background: #fff;">
                        <a href="{{ route('employee.profile-edit', $employee->id) }}" class="btn btn-flat btn-primary own-btn-color" style="background:linear-gradient(135deg, #2c3f46, #659ba9);">Edit Profile</a>
                    </div>
                    <div class="card-footer text-center" style="background: #fff;">
                        <a href="{{ route('employee.reset-password', $employee->id) }}" class="btn btn-flat btn-primary own-btn-color" style="background:linear-gradient(135deg, #2c3f46, #659ba9);">Change Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-lg-12 own-alignment">
                <h5 style="color:#fff">© 2022 ReelTime</h5>
            </div>
        </div>
    </div>
</div>

@endsection
