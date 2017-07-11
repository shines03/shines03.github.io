<?php
if(isset($_POST['pic'])){
include'connection.php';
session_start();
if(!get_magic_quotes_gpc())
	{
		$old_pic=$_SESSION['image'];
		$new_pic=$_POST['pic'];
	}
$dbname='hmproject';
mysql_select_db($dbname);
$sql="UPDATE student set image_url='$new_pic' where image_url='$old_pic'";
if(mysql_query($sql,$conn))
{
	echo '<script type="text/javascript">alert("Your profile pic has been changed.");</script>';
	$_SESSION['image']=$new_pic;
	include'profile.php';
}	
else
	echo mysql_error();
}
?>