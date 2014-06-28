<?php 
	require("connect.inc.php");
	$name = $_POST['name'];
	$email = $_POST['mail'];
	$message = $_POST['message'];
	$number = $_POST['phone'];
	$query = "INSERT INTO counselling(sno,name,email,phone,query) VALUES('','$name','$email','$number','$message')";
	$query_run = mysql_query($query);
?>