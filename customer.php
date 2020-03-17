<?php
//connection
$conn = mysqli_connect("localhost","root","","sacco");

if (isset($_POST['submit'])) {
	$name = $_POST['hname'];
	$card = $_POST['card_num'];
	$email = $_POST['email'];
	$sql = "INSERT INTO customer (name,card,email,)VALUES('$name','$card','$email')";
	if ($conn->query($sql) === TRUE) {
		echo "Row successfully inserted";
	}
	else{
		echo "Error inserting a row".$conn->error;
	}
$conn -> close();
}
//checck connection
/*
if (mysqli_connect_error()) {
	die("Database connection failed".mysqli_connect_error());
}
echo "connected successfully";
*/
