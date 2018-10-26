<?php include('header.php'); ?>
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<form class="login100-form validate-form">
				<span class="login100-form-title p-b-26">
					Student Login
				</span>
				<div class="text-center error" hidden>

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
					<input class="input100" type="password" name="password" id = "pass">
				</div>

				<div class="container-login100-form-btn">
					<div class="wrap-login100-form-btn">
						<div class="login100-form-bgbtn"></div>
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</div>
				<div class="text-center p-t-115">
					<span class="txt1">
						Don’t have an account?
					</span>

					<a class="txt2" href="pages/register.php">
						Sign Up
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>

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
		$.post('ajax/login.php', $(this).serialize(), function(data) {
			if(data == 'false') {
				$('.error').html('Your password is incorrect').css('color', 'red').attr('hidden', false);
			} else if(data == 'invalid') {
				$('.error').html('Your username or password is incorrect').css('color', 'red').attr('hidden', false);
			} else {
				$('.error').attr('hidden', true);
			}
		});
	});	
</script>