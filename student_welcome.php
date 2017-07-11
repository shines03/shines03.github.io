<?php
include 'connection.php';
$username=$_POST['_username'];
$password=$_POST['_password'];
$sql="SELECT * from student";
mysql_select_db('hmproject');
$retval=mysql_query($sql,$conn);
if(!$retval)
	die('Data could not be fetched');
$flag=0;
while($row=mysql_fetch_array($retval,MYSQL_ASSOC))
{
	if($username==@$row[user_name])
	{
		$flag=1;
		if($password==@$row[password])
		{
			$flag=1;
			break;
		}
		else
		{
			$flag=2;
			break;
		}
	}
}
	if($flag==1)
	{
		session_start();
		$_SESSION['name']=@$row[full_name];
		$_SESSION['image']=@$row[image_url];
		$_SESSION['reg_no']=@$row[reg_no];
		$_SESSION['fee']=@$row[payment_detail];
		$_SESSION['password']=@$row[password];
		include 'profile.php';
	}
	else if($flag==0)
	{
		echo '<script type="text/javascript">alert("You are not registered.");</script>';
		include 'signup.php';
	}
	else if($flag==2)
	{
		echo '<script type="text/javascript">alert("You have entered wrong password.");</script>';
		require 'login1.php';
	}
	

?>