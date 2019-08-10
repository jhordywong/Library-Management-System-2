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
	<form method="POST" action="/datadiri" enctype="multipart/form-data">
        {{ csrf_field() }}
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						PerpusQ - Data Diri 
					</span>

					<div class="wrap-input100 validate-input m-b-23{{ $errors->has('nama') ? ' has-error' : '' }}" data-validate = "nama is reauired">
						<span class="label-input100">Nama Lengkap</span>
						<input class="input100" input id="nama" type="text" class="form-control" name="nama" value="{{ old('nama') }}" required autofocus placeholder="Type your nama">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                            @if ($errors->has('nama'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nama') }}</strong>
                        </span>
                            @endif
					</div>

					<div class="wrap-input100 validate-input m-b-23{{ $errors->has('npm') ? ' has-error' : '' }}" data-validate = "npm is reauired">
						<span class="label-input100">NPM</span>
						<input class="input100" input id="npm" type="number" class="form-control" name="npm" value="{{ old('npm') }}" required autofocus placeholder="Type your npm">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                            @if ($errors->has('npm'))
                        <span class="help-block">
                            <strong>{{ $errors->first('npm') }}</strong>
                        </span>
                            @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('tempat_lahir') ? ' has-error' : '' }}" data-validate = "tempat_lahir is reauired">
						<span class="label-input100">Tempat Lahir</span>
						<input class="input100" input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus placeholder="Type your tempat lahir">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                            @if ($errors->has('tempat_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tempat_lahir') }}</strong>
                        </span>
                            @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('tgl_lahir') ? ' has-error' : '' }}" data-validate = "tgl_lahir is reauired">
						<span class="label-input100">Tanggal Lahir</span>
						<input class="input100" input id="tgl_lahir" type="date" class="form-control" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autofocus placeholder="Type your tgl_lahir">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                            @if ($errors->has('tgl_lahir'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tgl_lahir') }}</strong>
                        </span>
                            @endif
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('level') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">Jenis Kelamin</span>
                        <div class="col-md-6">
                            <select class="form-control" name="jk" required="">
                                <option value=""></option>
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                            </div>
                    </div>
                    
                    <div class="wrap-input100 validate-input m-b-23{{ $errors->has('prodi') ? ' has-error' : '' }}" data-validate = "Username is reauired">
						<span class="label-input100">Program Studi</span>
                        <div class="col-md-6">
                            <select class="form-control" name="prodi" required="">
                                <option value=""></option>
                                <option value="TI">Teknik Informatika</option>
                                <option value="SI">Sistem Informasi</option>
                                <option value="KM">Kesehatan Masyarakat</option>
                            </select>
                            </div>
                    </div>
                    
                    <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                     
                        <div class="col-md-6"> 
                            <input id="user_username" type="hidden" class="form-control" readonly="" value="{{Auth::user()->username}}" required>
                            <input id="user_id" type="hidden" name="user_id" value="{{ Auth::user()->id }}" required readonly="">
                          
                            @if ($errors->has('user_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('user_id') }}</strong>
                                </span>
                            @endif
                             
                        </div>
                    </div>
			
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Submit
							</button>
						</div>
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