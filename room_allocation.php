<?php
include'connection.php';
if(isset($_POST['reg_no']))
{
$sql1='SELECT * FROM student';
$dbname='hmproject';
mysql_select_db($dbname);
$retval1=mysql_query($sql1,$conn);
$flag=0;
while($row=mysql_fetch_array($retval1,MYSQL_ASSOC))
{
	if(@$row[reg_no]==$_POST['reg_no'])
	{
		$flag=1;
		if(@$row[room_no])
			$flag=2;
	}

if($flag==2)
{
	echo "<link rel='stylesheet' href='intime.css'></link><body>Room is already alloted<br><br><a href='admin_tasks.php'>Go to Admin Tasks</a></body>";
	break;
}
if($flag==1)
{
	session_start();
	$_SESSION['fname']=@$row[full_name];
	$_SESSION['reg_no']=@$row[reg_no];
	include'room_allocation15.php';
	break;
}
}
if($flag==0)
{
	echo "<link rel='stylesheet' href='intime.css'></link><body>This student has not registerd. Do you want to register him by yourself??<br><a href='signup.php'>YES</a></body>";
}
}
?>