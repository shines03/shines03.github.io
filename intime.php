<body><?php
echo "<link rel='stylesheet' href='intime.css'></link>";
$y=$_POST['year'];
$mon=$_POST['month'];
$d=$_POST['date'];
$h=$_POST['hours'];
$min=$_POST['minutes'];
$intime=$y."-".$mon."-".$d." ".$h.":".$min.":00";
echo $intime."<br>";
session_start();
if(!get_magic_quotes_gpc())
	{
			$reg_no=$_SESSION['reg_no'];
		}
include'connection.php';
$dbname='hmproject';
$sql="UPDATE student set in_time='$intime' where reg_no='$reg_no'";
mysql_select_db($dbname);
if(mysql_query($sql,$conn))
{
	echo "Successfully inserted to the in-time";
}
else
	echo mysql_error();
echo"<br><br><br><br><button id='entry'><a href='profile.php'>Go to profile</a></button>
	&nbsp;&nbsp;&nbsp;&nbsp;<button><a href='logout.php'>Logout</a></button>";
?>
</body>