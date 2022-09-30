@extends('layouts.app')        

@section('content')

@section('title')
<title>Admin Dashboard</title>
@endsection

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12 own-alignment">
                <h1 class="m-0" style="color: #fff;">Admin Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <row class="">
        <div class="col-md-8 mx-auto">
            <div class="jumbotron" style="background: #fff">
            <h1 class="display-6 text-primary own-color" >Welcome to Admin Panel of Reel Time!
            </h1>
            <p class="lead own-color" style="text-align: justify">We’re going to build a fishing app, but have fishing reports in multiple areas and want to start building the reports now so that when we launch next year, there are a lot of content reports for users to utilize on various lakes for fishing reports
            </p>
            <p class="own-alignment own-color">Hope You Like It!</p>
            </div>
        </div>
        </row>
    </div>
</section>

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-1">
            <div class="col-lg-12 own-alignment">
                <h5 style="color: #fff;">© 2022 ReelTime</h5>
            </div>
        </div>
    </div>
</div>

@endsection
