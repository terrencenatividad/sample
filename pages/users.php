<?php include('../header_outside.php'); ?>
<?php session_start(); ?>
<br><br><br>
<div class="container">
	<div class="container-box">
		<a href="create_user.php"><button class = "create_button">Create User</button></a>
		<br><br>
		<table class="table table-striped" id = "tableList">
			<thead>
				<tr>
					<td></td>
					<td>Id</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Username</td>
					<td>Password</td>
					<td>Time</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>
<?php include('../footer_outside.php'); ?>
<script>
	$('#tableList').on('click' , '.delete', function(e) {
		e.preventDefault();
		var id = $(this).attr('data-id');

		$.post('../ajax/delete_user.php', '&id=' + id, function(data) {
			if(data == 'success') {
				getList();
			} else {
				alert(data);
			}
		});
	});

	function getList() {
		$.post('../ajax/get_users.php', function(data) {
			$('#tableList tbody').html(data);
		});
	}
	getList();
</script>