<?php
	include 'student_welcome.php';
	session_start();
	$_SESSION['name']=@$row[user_name];
	
?>