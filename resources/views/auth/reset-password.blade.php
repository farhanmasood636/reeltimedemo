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
     <title>Change Password</title>
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
    <div class="title">Change Password</div>
    <div class="content">
        <form action="{{ route('admin.update-password') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')
        <div class="user-details">
          <div class="input-box">
            <span class="details">Current Password</span>
            <input name="current_password" type="password" required>
            @error('current_password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">New Password</span>
            <input name="new_password" type="password" required>
            @error('new_password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
          </div>
          <div class="input-box">
            <span class="details">Confirm Password</span>
            <input name="new_confirm_password" type="password" required>
            @error('new_confirm_password')
            <div class="text-danger">
                {{ $message }}
            </div>
        @enderror
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
