<!doctype html>
<html>
<head>
<style type="text/css">
	body{
		margin: 0;
		padding: 0;
		background-color: white;
		font-family: 'Arial';
	}
	h2{
		text-align: center;
		color: #0A0909;
		padding: 20px;
	}
	.registration{
		width: 350px;
		position:absolute;top: 60%;
		left: 35%;
		margin: auto;
		padding: 60px;
		background-color:#CAC7D2;
		border-radius: 15px;
		
	}
	.bottom {
		position:absolute;
		left:0%;
		top:170%;
		background-color:mediumslateblue;
		font-family:alegreya;
		font-weight:500;
		font-size: 20px;
		color: #fffafa;
		height: 300px;
		width:1520px;
	}
	label{
		color:midnightblue;
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
		width: 310px;
		height: 30px;
		border: none;
		border-radius: 17px;
		padding-left: 7px;
		color: #039;
	}
	#submit{
		width: 310px;
		height: 30px;
		border: none;
		border-radius: 17px;
		padding-left: 7px;
		color: #039;
	}
	
		.about{
	width: 1520px;
  max-width: 2000px;
		height: 270px;
  position: absolute;top: 100px;
  margin: auto;
	background-color:mediumslateblue;	
}
	.about a.text {
    color: white;
    font-size: 100px;
    padding: 20px 20px;
    position: absolute;
    top: 20px;
    width: 1000px;
		left: 260px;
    text-align: center;
    font-family: allan;
    text-shadow: 0 0 30px grey;
    font-style: normal;
    font-weight: 800;
}
		.about a.textd{
		 color: white;
    font-size: 20px;
    padding: 20px 20px;
    position: absolute;
    top: 135px;
    width: 1000px;
		left: 260px;
    text-align: center;
    font-family: allan;
    text-shadow: 0 0 30px grey;
    font-style: normal;
    font-weight: 400;
		
	}

	
</style>
<meta charset="utf-8">
<title>User Registration</title>
	<script type="text/javascript">
	function validate_form(){
	var valid= true;
		if (document.registration_form.name.value=="")
			{
				alert("please fill  name field!");
				document.registration_form.name.focus();
				valid= false;
			}
		else if(document.registration_form.email.value=="")
			{
				alert("please fill email field!");
				document.registration_form.email.focus();
				valid= false;
			}
		else if(document.registration_form.username.value=="")
			{
				alert("please fill username field!");
				document.registration_form.username.focus();
				valid= false;
			}
		else if(document.registration_form.password.value=="")
			{
				alert("please fill password field!");
				document.registration_form.password.focus();
				valid= false;
			}
		else if(document.registration_form.age.value=="")
			{
				alert("please fill age field!");
				document.registration_form.age.focus();
				valid= false;
			}
		else if(document.registration_form.mobile.value=="")
			{
				alert("please fill mobile field!");
				document.registration_form.mobile.focus();
				valid= false;
			}
		return valid;	
	}
	</script>
</head>

<body>
	<?php include("navigation.html");

	
	?>
	
	<div class="about">
	<a class="text">Register</a>
	<a class="textd">Make sure you remember the username and password</a>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="registration">
<form name="registration_form" method="POST" action="InsertEmp.php" onSubmit="return validate_form(); ">
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
	<input type="submit" name="submit" id="submit" value="Register">
	
	</form>
	
	</div>
	<div class="bottom" style="text-align:center">
	<br><br><br>
  <a href="aboutus.html" style="color:#fffafa">About Us</a>
	<br><br>
	<a href="#Partner" style="color:#fffafa">Partner with Us</a><br><br><br>
	<hr width="1000px" align="center"> <br>
	<p> &#169; 2021 ROADTRIP SRI LANKA.   All rights reserved.</p>
    
</div>
</body>
</html>
