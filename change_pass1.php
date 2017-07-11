<?php
if(isset($_POST['password'])){
include'connection.php';
session_start();
if(!get_magic_quotes_gpc())
	{
		$old_pass=$_SESSION['password'];
		$new_pass=$_POST['password'];
	}
$dbname='hmproject';
mysql_select_db($dbname);
$sql="UPDATE student set password='$new_pass' where password='$old_pass'";
if(mysql_query($sql,$conn))
{
	echo '<script type="text/javascript">alert("Your password has been changed.");</script>';
	$_SESSION['password']=$new_pass;
	include'profile.php';
}	
else
	echo mysql_error();
}
?>