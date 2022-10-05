<?php
	include_once 'db.php';
$firstname = $_POST['firstname'];	
$lastname = $_POST['lastname'];
$yourcountry = $_POST['yourcountry'];
$subject = $_POST['subject'];

$sql = "INSERT INTO contact (fname, lname, country, subject) VALUES ('$firstname', '$lastname', '$yourcountry', '$subject');";
mysqli_query($conn, $sql);

	header("location:contact.php?form=success");