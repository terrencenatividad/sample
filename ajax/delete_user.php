<?php 
require 'config.php';
$id = $_POST['id'];
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM users WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
	echo "success";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>