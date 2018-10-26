<?php include('../header_outside.php'); ?>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action = "">
					<span class="login100-form-title p-b-26">
						Create User
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

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header">
					<ion-icon name="checkmark-circle" size = "large"></ion-icon>
				</div>
				<div class="modal-body">
					<h3>Save Successfully</h3>
					<br><br>
				</div>
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
			$.post('../ajax/create_user.php', $(this).serialize(), function(data) {
				if(data) {
					$('#myModal').modal('show');
					setTimeout(function() {
						window.location = data;
					}, 1000);
				}
			});
		});
	</script>