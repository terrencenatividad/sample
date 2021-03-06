<?php include('../header_outside.php'); ?>
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
	<?php include('../footer_outside.php'); ?>
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