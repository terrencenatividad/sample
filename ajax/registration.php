<?php 
require 'config.php';

$data = $_POST;
$arr = array();
foreach ($data as $key => $value) {
	$arr[] = $value;
}
$arr[3] = password_hash($arr[3], PASSWORD_BCRYPT);
$table_values = array('firstname' => 'firstname', 'lastname' => 'lastname', 'username' => 'username', 'password' => 'password');
$columns_table = implode(',',array_keys($table_values));
$values  = implode('","', array_values($arr));

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
$sql = 'INSERT INTO users ('. $columns_table . ') VALUES ("'.$values . '")';
if (mysqli_query($conn, $sql)) {
	echo "../index.php";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>