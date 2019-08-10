<!DOCTYPE html>
<html lang="en">
<head>
	<title>PerpusQ</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
<form method="POST" action="/register" enctype="multipart/form-data">
    {{ csrf_field() }}
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						PerpusQ - Daftar
					</span>

                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('username') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">Username</span>
						<input class="input100" input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus placeholder="Type your username">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                            @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                            @endif
					</div>
                    
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email is reauired">
						<span class="label-input100">E-Mail Address</span>
						<input class="input100"input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"placeholder="Type your E-Mail">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23">
						<span class="label-input100">Foto Profil</span>
						<input class="uploads form-control" type="file" name="gambar" style="margin-top: 20px;" >
						<span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="col-md-6t" data-validate="Password is required">
				
                        <input id="user_level" type="hidden" name="level" class="form-control" readonly="" value="user" required>
                        
					</div>
                    
                   		<div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" onkeyup='check();' name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
					    </div>

					<div class="wrap-input100 validate-input" >
						<span class="label-input100">Konfirmasi Password</span>
						<input class="input100"   id="confirm_password" type="password" onkeyup='check();' name="password_confirmation" placeholder="Type your password">
						<span class="focus-input100" id='message' data-symbol="&#xf190;"></span>
					</div>
					
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Daftar
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Or Login Now Using
						</span>

						<a href="/login" class="txt2">
							Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>