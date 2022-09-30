<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
</head>
<body>
<div class="login-box">
  
    <div class="container">
		<div class="img img-fluid">
			<img src="{{ asset('img/logo1.jpeg') }}" style="transform: rotate(270deg); style"          ">
		</div>
        <div class="login-content">
            <form action="{{ route('login') }}" method="post">
                @csrf
                <img src="{{ asset('img/avatar.jpg') }}">
				<h2 class="title">Welcome Back!</h2>
                <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="email" class="input @error('email') is-invalid @enderror" name="email" 
                            required
                            autofocus>
                    </div>
                 </div>
                 <div class="input-div pass">
                    <div class="i"> 
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Password</h5>
                         <input type="password" class="input @error('password') is-invalid @enderror"
                         name="password" required autocomplete="current-password" autofocus>
                 </div>
                 @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>These Credentials Do Not Match With Our Records!</strong>
                        </span>
                    @enderror
              </div>
                <div class="row">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>These Credentials Do Not Match With Our Records!</strong>
                        </span>
                    @enderror
                    <div class="col-4">
                        <button
                            type="submit"
                            class="btn btn-primary btn-block" style="background:linear-gradient(135deg, #2c3f46, #659ba9); border:none;"> Log In </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
           	