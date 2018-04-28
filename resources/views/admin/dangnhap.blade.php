<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng nhập admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
<base href="{{asset('')}}">
	<link rel="icon" type="image/png" href="style_home/style_login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="style_home/style_login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="style_home/style_login/css/util.css">
	<link rel="stylesheet" type="text/css" href="style_home/style_login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  method="post" action="admin/dangnhap">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					@if(count($errors) >0) 
					<div class="alert alert-danger">
					   @foreach($errors->all() as $er)
							{{$er}}<br>
					   @endforeach
					</div>
					@endif
					@if(session('thongbao')) 
					<div class="alert alert-danger">
							{{session('thongbao')}}<br>
					</div>
					@endif
					<span class="login100-form-title p-b-26">
						Welcome
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" value=" Đăng nhập" class="btn btn-primary">
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>

						<a class="txt2" href="#">
							Sign Up
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/bootstrap/js/popper.js"></script>
	<script src="style_home/style_login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/daterangepicker/moment.min.js"></script>
	<script src="style_home/style_login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="style_home/style_login/js/main.js"></script>

</body>
</html>