@extends('layouts.app')        

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12 text-center">
                <h1 class="m-4" style="color: #fff;">Profile</h1>
            </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ url()->previous() }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a>
                        <h5 class="text-center mt-2">Employee Profile</h5>
                    </div>
                    <div class="card-body">
                        @include('messages.alerts')
                        <table class="table profile-table table-hover">
                            <tr>
                                <td>First Name</td>
                                <td>{{ $employee->first_name }}</td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td>{{ $employee->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $employee->gender }}</td>
                            </tr> 
                            <tr>
                                <td>Created At</td>
                                <td>{{ $employee->created_at }}</td>
                            </tr> 
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-1">
                <div class="col-lg-12 own-alignment">
                    <h5 style="color: #fff;">© 2022 ReelTime</h5>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
