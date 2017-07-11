<!doctype html>
<?php
?>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="login.css"></link>
</head>
<body>
<div >
<form action='admin_check.php' method='POST' id='login-form'>
<input type='text' name='_username' placeholder='Enter username' required /><br>
<input type='password' name='_password' placeholder='Enter password' required /><br>
<button type='submit'>Login</button>
</form>
<a href='index.php'><img src="green_back.png" height='60px' width='125px' id='back'/></a>
</div>

</body>
</html>