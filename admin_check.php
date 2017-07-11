<?php
$username=$_POST['_username'];
$password=$_POST['_password'];
if($username=='admin' && $password=='pass')
	include'admin_tasks.php';
else
{
	echo '<script type="text/javascript">alert("!!! You are not the admin !!!");</script>';
	include'admin_login.php';
}
?>