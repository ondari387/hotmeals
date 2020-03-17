<?php
$conn = new mysqli('localhost','root','','crud'); 
//check connection
	if ($conn -> connect_error) {
		die("Connection failed:".$conn->connect_error);
		}
	if (isset($_POST['save'])) {
			$name = $_POST['name'];
			$location = $_POST['location'];

	$sql = "INSERT INTO data (name,location) VALUES ('$name','$location')";
	$conn->query($sql);

	/*if ($conn -> query($sql)===TRUE) {
		echo "New record added successfully";
	}
	else{
		echo "Error:".$conn->error;
	}
	$conn->close();*/

}