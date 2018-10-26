<?php 
require 'config.php';
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users WHERE 1";
$result = mysqli_query($conn, $sql);
$table = '';
if (mysqli_num_rows($result) > 0) { 
	while($row = mysqli_fetch_assoc($result)) { 
		$time = explode(' ', $row['entereddate']);
		$table .= '<tr>';
		$table .= '<td colspan = "2" class = "flex">
		<ion-icon style = "cursor : pointer" name="eye" size = "small" class = "delete" data-id = '. $row['id']. ' ? title = "View"></ion-icon>
		<ion-icon style = "cursor : pointer" name="trash" size = "small" class = "delete" data-id = '. $row['id']. ' ? title = "Delete"></ion-icon></td>';
		$table .= '<td>' . $row['id'] .'</td>';
		$table .= '<td>' .$row['firstname']. '</td>';
		$table .= '<td>' .$row['lastname']. '</td>';
		$table .= '<td>' .$row['username']. '</td>';
		$table .= '<td>' .$row['password']. '</td>';
		$table .= '<td>' . $time[1] . '</td>';
		$table .= '</tr>';
	}
} else {
	$table .= '<td colspan="9" class="text-center">0 Results</td>';
}
mysqli_close($conn);

echo $table;

?>