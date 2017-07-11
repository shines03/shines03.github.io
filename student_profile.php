<?php
include'connection.php';
if(!get_magic_quotes_gpc())
{
	$username=$_POST['_username'];
	$password=$_POST['_password'];
	$fullname=$_POST['_fname']." ".$_POST['_lname'];
	$image=$_POST['_pic'];
	$email_id=$_POST['_email_id'];
	$father_name=$_POST['_father_name'];
	$father_email_id=$_POST['_email_father'];
	$branch=$_POST['_branch'];
	$reg_no=$_POST['_reg_no'];
	$full_address=$_POST['_address'];
}
else 
	die('format error'.mysql_error());
$dbname = "hmproject";
$sql1='SELECT * FROM student';
mysql_select_db($dbname);
$retval1=mysql_query($sql1,$conn);
if(!$retval1)
			{
				die('Die could not be fetched'.mysql_error());
			}
$flag=0;
while($row=mysql_fetch_array($retval1,MYSQL_ASSOC))
{
	if($username==@$row[user_name])
	{
		$flag=1;
			break;
	}
	if($email_id==@$row[email_id])
	{
		 $flag=2;
			break;
	}
	if($reg_no==@$row[reg_no])
	{
		 $flag=3;
			break;
	}
}
if($flag==0)
{
	$sql="INSERT INTO `student` 
	(`user_name`, `password`, `full_name`, `image_url`, `email_id`, `father_name`, `father_email_id`, `branch`, `reg_no`, `full_address` ) 
	VALUES ('$username', '$password', '$fullname', '$image', '$email_id', '$father_name', '$father_email_id', '$branch', '$reg_no', '$full_address')";
	$retval=mysql_query($sql,$conn);
	include 'proceed_to_login.php';
}
else if($flag==1)
{
	echo "<p class='danger'>User name already exists</p>";
	include 'signup.php';
}
else if($flag==2)
{
	echo "<p class='danger'>Email id already exists</p>";
	include 'signup.php';
}
else if($flag==3)
{
	echo "<p class='danger'>This reg_no has already registerd </p>";
	include 'signup.php';
}

?>