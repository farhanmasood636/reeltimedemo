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
 <title>Register Employee</title>
   </head>
<body>
  <div class="container">
    <div class="back">
      <a href="{{ url('/admin') }}"><i class="fa fa-arrow-left" style="color: #659ba9" aria-hidden="true"></i></a>
    </div>
    @if(session('success'))
<div class="alert alert-success text-center">
<h4>{{ session('success') }}</h4>
</div>
@endif
    <div class="title">Employee Registration Form</div>
    <div class="content">
        <form action="{{ route('admin.employees.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
        <div class="user-details">
          <div class="input-box">
            <span class="details">First Name</span>
            <input name="first_name" type="text" value="{{ old('first_name') }}" required>
            @error('first_name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Last Name</span>
            <input name="last_name" type="text" value="{{ old('last_name') }}" required>
            @error('last_name')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input name="email" type="text"value="{{ old('email') }}"  required>
            @error('email')
                <div class="text-danger">
                     {{ $message }}
                </div>
             @enderror
          </div>
          <div class="input-box">
            <span class="details">Gender</span>
            <select name="gender">
                <option hidden disabled selected value> -- Select An Option -- </option>
                @if (old('gender') == 'Male')
                <option value="Male" selected>Male</option>
                <option value="Female">Female</option>
                @elseif (old('gender') == 'Female')
                <option value="Male">Male</option>
                <option value="Female" selected>Female</option>
                @else
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                @endif
            </select>
            @error('gender')
                <div class="text-danger">
                    Please Select An Valid Option!
                </div>
            @enderror
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input name="password" type="password" required>
            @error('password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
        </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="password_confirmation" type="password" required>
            @error('password_confirmation')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
