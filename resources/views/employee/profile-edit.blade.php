<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('css/formStyle.css') }}">
     <link
     rel="stylesheet"
     href="/plugins/fontawesome-free/css/all.min.css"
 />
     <title>Edit Profile</title>
   </head>
<body>
  <div class="container">
    <div class="back">
      <a href="{{ url('/employee') }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a>
    </div>
    @if(session('success'))
<div class="alert alert-success text-center" style="background: #fff !important">
<h4 style=color:#fff;>Record Has Been Successfully Updated!</h4>
</div>
@endif
    <div class="title">Edit Profile</div>
    <div class="content">
        <form action="{{ route('employee.profile-update', $employee->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input name="first_name" value="{{ $employee->first_name }}" type="text" required>
            @error('first_name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input name="last_name" value="{{ $employee->last_name }}" type="text" required>
            @error('last_name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <select name="gender" class="form-control">
            @if ($employee->gender == 'Male')
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
            @else
                <option value="Male">Male</option>
                <option value="Female" selected>Female</option>
            @endif
        </select>
          </div>        
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
