<?php

if (isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$num_people = $_POST['num_people'];
	$confidentiality_level = $_POST['confidentiality_level'];

//model
 	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "hotmeals";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From hotmeals Where email = ? Limit 1";
     $INSERT = "INSERT Into hotmeals (fname,lname,phone,email,book_date,book_time,confidentiality_level,num_people) values(?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssissssi", $fname, $lname, $phone, $email, $date, $time,$confidentiality_level,$num_people);
      $stmt->execute();
      	echo '<script language="javascript">';
		echo 'alert("You have successfully booked a table")';
		echo '</script>';
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}

?>