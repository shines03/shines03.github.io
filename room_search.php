<html>
<head>
<meta charset="utf-8"/>
<title>try1</title>
<link rel="stylesheet" href="try1.css"></link>
</head>
<?php

if(isset($_GET['searchFor']) && $_GET['searchFor']!='')
{		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "hmproject";
		$conn=mysql_connect($servername,$username,$password);
		if(!$conn)
			die('Connection could not be established !!!');
		else
		{
			$searchFor=$_GET['searchFor'];
			$sql='SELECT room_no,reg_no,full_name FROM student';
			mysql_select_db($dbname);
			$retval=mysql_query($sql,$conn);
			if(!$retval)
			{
				die('Die could not be fetched'.mysql_error());
			}
			$flag=0;
			while($row=mysql_fetch_array($retval,MYSQL_ASSOC))
			{
				if($searchFor==@$row[reg_no])
				{
					$flag=1;
					echo "<body><div>
							<div>
									Room No is ".@$row[room_no]."<br>
									".@$row[full_name]."
							</div>
							</div></body>";
					break;
				}
			}
			if($flag==0)
				echo "<body><div>
							<div>
								Student not found !!!
							</div>
							</div></body>";
		}
		echo "<br><br><br><a href='index.php'><img id='image' src='back.png' height='80px' width='80px' ></img></a>";
		mysql_close($conn);
}
else{
	$redirect_page='index.php';
	header('Location: '. $redirect_page);
}
?>