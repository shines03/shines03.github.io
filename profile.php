<!doctype html>
<?php
@session_start();
include 'connection.php';
?>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<title>Profile</title>
<link rel="stylesheet" href="profile1.css"></link>
</head>
<body>
<div>
<nav>
			<ul>
				<li class="navs"><a href="change_pass.php">Change Password</a></li>
				<li class="navs"><a href="change_pic.php">Change pic</a></li>
				<li class="navs"><a href="logout.php">Logout</a></li><br>
			</ul>
		</nav>
	<aside id ='asd'>
		<img src=<?php echo $_SESSION['image'];?> height= 125px width=150px></img>
		<p id='info'><?php echo $_SESSION['name'];?><br><?php echo $_SESSION['reg_no'];?></p>
	</aside>
	<section id='sec'>
		<?php
			if(!$_SESSION['fee']){
			echo "<form action='fee_submit.php' method='POST'>
				Fee Details: <br><br>
				Enter the cheque no:<input type=number name='cheque_no'><br>
					<button type='submit'>Submit</button></form>";
			}
			else
				echo "Fee Details: Cleared";
		?>
		<br><br>
		If you want to go outside please enter the In-time:<br><br>
		<form action='intime.php' method='POST'>
		Date:<input type='number' name='date' placeholder=00 required />
		Month:<input type='number' name='month' placeholder=00 required />
		Year:<input type='number' name='year' placeholder=00 required /><br><br>
		Hours:<input type='number' name='hours' placeholder=00 required />
		Minutes:<input type='number' name='minutes' placeholder=00 required />
		<button type='submit'>Submit</button>
		</form>
	</section>
</div>
</body>
</head>