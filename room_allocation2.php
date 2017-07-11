<?php
	session_start();
	include'connection.php';
	if(isset($_POST['aroom']))
	{
		if(!get_magic_quotes_gpc())
		{
			$reg_no=$_SESSION['reg_no'];
			$aroom=$_POST['aroom'];
			$name=$_SESSION['fname'];
		}
		$sql2='SELECT * FROM rooms';
		$dbname='hmproject';
		mysql_select_db($dbname);
		$retval2=mysql_query($sql2,$conn);
		$flag=0;
		while(@$row=mysql_fetch_array($retval2,MYSQL_ASSOC))
		{ 
			if($_POST['aroom']==@$row[room_no])
			{
				$flag=1;
				if(!@$row[f_reg_no])
				{
					$flag=11;
				}
				
				else if(!@$row[s_reg_no]){
					$flag=12;
				}
				
				else if(!@$row[t_reg_no]){
					$flag=13;
				}
			}
		}
		if($flag==0){
			echo '<script type="text/javascript">alert("This room does not exist");</script>';
			include'room_allocation15.php';
		}
		else if($flag==1){
			echo '<script type="text/javascript">alert("This room is already occupied.");</script>';
			include'room_allocation15.php';
		}
		else if($flag==11)
		{
			$sql1="UPDATE rooms set f_reg_no='$reg_no', f_name='$name' where room_no='$aroom'";
			$sql2="UPDATE student set room_no='$aroom' where reg_no='$reg_no'";
			if(mysql_query($sql1,$conn) && mysql_query($sql2,$conn))
				echo '<link rel="stylesheet" href="intime.css"><body>Room allocated as First member<br><br><a href="admin_tasks.php">Go to Admin Tasks</a><body>';
			else
				echo mysql_error();
		}
		else if($flag==12)
		{
			$sql1="UPDATE rooms set s_reg_no='$reg_no', s_name='$name' where room_no='$aroom'";
			$sql2="UPDATE student set room_no='$aroom' where reg_no='$reg_no'";
			if(mysql_query($sql1,$conn) && mysql_query($sql2,$conn))
				echo '<link rel="stylesheet" href="intime.css"><body>Room allocated as Second member<br><br><a href="admin_tasks.php">Go to Admin Tasks</a></body>';
			else
				echo mysql_error();
		}
		else if($flag==13)
		{
			$sql1="UPDATE rooms set t_reg_no='$reg_no', t_name='$name' where room_no='$aroom'";
			$sql2="UPDATE student set room_no='$aroom' where reg_no='$reg_no'";
			if(mysql_query($sql1,$conn) && mysql_query($sql2,$conn))
				echo '<link rel="stylesheet" href="intime.css"><body>Room allocated as Final member<br><br><a href="admin_tasks.php">Go to Admin Tasks</a></body>';
			else
				echo mysql_error();
		}
	}

?>