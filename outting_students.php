<?php
	include'connection.php';
	$dbnmae='hmproject';
	mysql_select_db($dbname);
	$sql="Select in_time, reg_no, room_no, full_name from student";
	$retval=mysql_query($sql,$conn);
	$curtime=time();
	echo "<link rel='stylesheet' href='table.css'></link><body>List of students which has crossed there in-time<br><br><table align='center'><th>Name</th><th>Reg_no</th><th>Room_no</th><th>In Time</th>";
	while(@$row=mysql_fetch_array($retval,MYSQL_ASSOC))
	{
		if(@$row[in_time]){
		$intime=strtotime(@$row[in_time]);
		if($curtime+12600-$intime>0)
			echo "<tr><td>$row[full_name]</td><td>$row[reg_no]</td><td>$row[room_no]</td><td>$row[in_time]</td></tr>";
	}
	
	}
	echo "</table><br><br><a href='admin_tasks.php'>Back</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='admin_login.php'>Logout</a></body>"
?>