<!doctype html>
<?php
?>
<html lang="en" >
<head>
<meta charset="utf-8"/>
<title>Sign Up</title>
<link rel="stylesheet" href="signup.css"></link>
</head>
<body>
<div >
<p>Please fill the following informations</p><hr>
<form action='student_profile.php' method='POST' id='login-form' >
<br><br>
<input type='text' name='_fname' placeholder='First name' id='fname'required />
<input type='text' name='_lname' placeholder='Last name' id='lname' required />
<input type='text' name='_username' placeholder='Username' id='username'required />
<input type='password' name='_password' placeholder='Enter password' id='password' required />
<input type='file' name='_pic' placeholder='Upload Pic' id='pic' required />
<input type='email' name='_email_id' placeholder='email_id' id='email_id'required />
<input type='number' name='_mobile' placeholder='Mobile' id='mobile_no' required />
<input type='text' name='_father_name' placeholder='Father name' id='father' required />
<input type='email' name='_email_father' placeholder='Father email_id' id='femail' requied />
<input type='number' name='_father_mobile' placeholder='Father Mobile' id='fmobile'required />
<input type='number' name='_age' placeholder='Age' id='age'required />
<input type='text' name='_branch' placeholder='Branch' id='branch'required />
<input type='text' name='_reg_no' placeholder='Reg No' id='reg_no'required />
<input type='text' name='_address' placeholder='Full Address' id='address'required />

<br>
<button type='submit'>Submit</button>
</form>
</div>

</body>
</html>