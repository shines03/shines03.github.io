<?php
include'connection.php';
$dbnmae='hmproject';
mysql_select_db($dbname);
session_start();
$_SESSION['fee']='paid';
if(!get_magic_quotes_gpc())
	{
			$cheque_no=$_POST['cheque_no'];
			$reg_no=$_SESSION['reg_no'];
	}
$sql="UPDATE student set payment_detail='$cheque_no' where reg_no='$reg_no'";
if(mysql_query($sql,$conn))
{
	echo '<script type="text/javascript">alert("You have paid the fee.");</script>';
	include'profile.php';
}
else
	echo mysql_error();
?>