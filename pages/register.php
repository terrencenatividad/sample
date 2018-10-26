<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
	<script src="../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../assets/js/popper.min.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>
	<script src="../assets/js/main.js"></script>
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action = "">
					<span class="login100-form-title p-b-26">
						Registration Form
					</span>

					<div class="wrap-input100">
						First Name
						<input class="input100" type="text" name="firstname" autocomplete="off">
					</div>

					<div class="wrap-input100">
						Last Name
						<input class="input100" type="text" name="lastname" autocomplete="off">
					</div>

					<div class="wrap-input100">
						Username
						<input class="input100" type="text" name="username" autocomplete="off">
					</div>

					<div class="wrap-input100">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						Password
						<input class="input100" type="password" name="pass" id = "pass">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Register
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php include('../footer.php'); ?>
	<script>
		$(".zmdi").on('click',function() {
			$(this).toggleClass("zmdi-eye zmdi-eye-off");
			if ($('#pass').attr('type') == "password") {
				$('#pass').attr("type", "text");
			} else {
				$('#pass').attr("type", "password");
			}
		});

		$('form').submit(function(e) {
			e.preventDefault();
			$.post('../ajax/registration.php', $(this).serialize(), function(data) {
				if(data) {
					setTimeout(function() {
						window.location = data;
					}, 100);
				}
			});
		});
	</script>