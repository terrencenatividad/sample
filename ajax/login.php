<?php 
require 'config.php';
session_start();

$data = $_POST;
$username = $data['username'];
$password = $data['password'];

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT username, password FROM users WHERE username = '$username'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) { 
	while($row = mysqli_fetch_assoc($result)) {
		if (password_verify($password, $row['password'])) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['password'] = $row['password'];
		} else {
			echo 'false';
		}
	}
} else {
	echo "invalid";
}

if(isset($_SESSION)) {
	echo 'session set';
} else {
	echo 'no session bessy';
}
mysqli_close($conn);

?>