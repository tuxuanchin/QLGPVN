<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V8</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
	<link rel="stylesheet" type="text/css" href="public/css/util.css">
	<link rel="stylesheet" type="text/css" href="public/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Đăng Nhập
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Nhập tên tài khoản">
						<input class="input100" type="text" name="username" placeholder="Tên tài khoản">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pass" placeholder="Nhập mật khẩu">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						
					</div>

					<div class="container-login100-form-btn m-b-16">
						<button class="login100-form-btn">
							Đăng Nhập
						</button>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" onclick="location.href='index.php';">
							Huỷ
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							Chưa có tài khoản
						</span>

						<a href="Sign up.html" class="txt3">
							Đăng ký mới
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	<script src="public/login.js"></script>

</body>
</html>