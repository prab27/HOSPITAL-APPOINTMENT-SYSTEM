<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','hospital');

// get the post records
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$date = $_POST['date'];
$message = $_POST['message'];


// database insert SQL code
$sql = "INSERT INTO `hospital` (`first_name`, `last_name`, `email`, `mobile`, `date`, `message`) VALUES ('$first_name', '$last_name', '$email', '$mobile','$date', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
