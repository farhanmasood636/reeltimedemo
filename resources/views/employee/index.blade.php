@extends('layouts.app')        

@section('content')

@section('title')
<title>Employee Dashboard</title>
@endsection

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-lg-12 own-alignment">
                <h1 class="m-0" style="color:#fff;">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
  <div class="container-fluid">
      <row class="">
      <div class="col-md-8 mx-auto">
          <div class="jumbotron" style="background: #fff">
          <h1 class="display-6 text-primary" style="color: black !important">Welcome to Admin Panel of Reel Time</h1>
          <p class="lead" style="text-align: justify">We’re going to build a fishing app, but have fishing reports in multiple areas and want to start building the reports now so that when we launch next year, there are a lot of content reports for users to utilize on various lakes for fishing reports
          </p>
          <p class="own-alignment">Hope You Like It, 
            @if ($employee->gender == 'Male')
              Mr. {{ $employee->first_name.' '.$employee->last_name .'!'}}
            @else
              Ms. {{ $employee->first_name.' '.$employee->last_name.'!' }}
            @endif
</p>
          </div>
      </div>
      </row>
  </div>
</section>

<div class="content-header">
  <div class="container-fluid">
      <div class="row mb-1">
          <div class="col-lg-12 own-alignment">
              <h5 style="color:#fff;">© 2022 ReelTime</h5>
          </div>
      </div>
  </div>
</div>

@endsection
