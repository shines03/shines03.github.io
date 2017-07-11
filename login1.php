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
<form action='student_welcome.php' method='POST' id='login-form'>
<input type='text' name='_username' placeholder='Enter username' required /><br>
<input type='password' name='_password' placeholder='Enter password' required /><br>
<button type='submit'>Login</button>
<br><p id='message'>Not registerd? <a href='signup.php'>&nbsp;Create an account</a></p>
</form>
<a href='index.php'><img src="green_back.png" height='60px' width='125px' id='back'/></a>
</div>

</body>
</html>