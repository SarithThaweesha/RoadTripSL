<!doctype html>
<html>
<head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background-color: #F2E6B0;
		font-family: 'Arial';
	}
	h2{
		text-align: center;
		color: #0A0909;
		padding: 20px;
	}
	.login{
		width: 350px;
		margin: auto;
		padding: 60px;
		background: #F2BB17;
		border-radius: 15px;
	}
	label{
		color: #B47206;
		font-size: 17px;
	}
	#style{
		width: 300px;
		height: 30px;
		border: none;
		border-radius: 3px;
		padding-left: 8px;
	}
	
	#clear{
		width: 300px;
		height: 30px;
		border: none;
		border-radius: 17px;
		padding-left: 7px;
		color: #039;
	}
	#submit{
		width: 300px;
		height: 30px;
		border: none;
		border-radius: 17px;
		padding-left: 7px;
		color: #039;
	}
	
	
	
</style>
<meta charset="utf-8">
<title>simple login form with javascript validation</title>
	<script type="text/javascript">
	function validate_form(){
	var valid= true;
		if (document.login_form.name.value=="")
			{
				alert("please fill  name field!");
				document.login_form.name.focus();
				valid= false;
			}
		else if(document.login_form.email.value=="")
			{
				alert("please fill email field!");
				document.login_form.email.focus();
				valid= false;
			}
		else if(document.login_form.username.value=="")
			{
				alert("please fill username field!");
				document.login_form.username.focus();
				valid= false;
			}
		else if(document.login_form.password.value=="")
			{
				alert("please fill password field!");
				document.login_form.password.focus();
				valid= false;
			}
		else if(document.login_form.age.value=="")
			{
				alert("please fill age field!");
				document.login_form.age.focus();
				valid= false;
			}
		else if(document.login_form.mobile.value=="")
			{
				alert("please fill mobile field!");
				document.login_form.mobile.focus();
				valid= false;
			}
		return valid;
		
	}
	</script>
</head>

<body>
	<?php include("navigation.html") ?>
<div class="login">
<form name="login_form" method="POST" action="disData.php" onSubmit="return validate_form(); ">
	<h1>Enter your information</h1>
	<label>
	<b> Name</b></label><br>
	<input type="text" name="name" id="style" placeholder="Name">
	<br><br>
	<label>
	<b>Email</b></label><br>
	<input type="text" name="email" id="style" placeholder="email">
	<br><br>
	<label>
	<b>User Name</b></label><br>
	<input type="text" name="username" id="style" placeholder="userName">
	<br><br>
	<label>
	<b>Password</b></label><br>
	<input type="password" name="password" id="style" placeholder="password">
	<br><br>
    <label>
	<b>Age</b></label><br>
	<input type="text" name="age" id="style" placeholder="age">
	<br><br>
	<label>
	<b>Mobile</b></label><br>
	<input type="text" name="mobile" id="style" placeholder="mobile">
	<br><br>
	<input type="reset" name="clear" id="clear" value="clear">
	<br><br>
	<input type="submit" name="submit" id="submit" value="submit">
	
	</form>
	</div>
	
</body>
</html>
