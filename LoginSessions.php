<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style type="text/css">
	body{
		background-color: white;
	}
	
	.heading{
		position: absolute;
	left: 35%;
		top: 55%;
		font-family: alegreya;
		font-size: 35px;	
		font-weight: 545;
		line-space: 0.7px;
		border: 1px solid white;
		padding: 1px;
		 width: auto;
		height: auto;
		text-align: center;
		
	}
	.bottom {
		position:absolute;
		left:0%;
		top:110%;
		background-color:mediumslateblue;
		font-family:alegreya;
		font-weight:500;
		font-size: 20px;
		color: #fffafa;
		height: 300px;
		width:1520px;
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
    top: 25px;
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
<?php
	
 include("navigation.html");
 session_start();
 $msg="";
 if(isset($_POST['submit'])) {
	
 include 'connection.php';
 
 $uname=$_POST['username'];
 $password=$_POST['password'];


 $sql="SELECT * FROM customer WHERE userName='$uname' and password ='$password'";

 $result = mysqli_query($connec,$sql);

 $row= mysqli_fetch_array($result);

 $_SESSION['user']=$row['userName'];
   
 if(mysqli_num_rows($result) == 1) {
         
    header("location:dispackages.php");
      }else 
	  {
        $msg = "Your Login Name or Password is invalid";		 
      }
	  
	  echo "<script type='text/javascript'>alert('$msg');</script>";
}

?>
<html>
<head>
<title>User Login</title>
</head>
<body>
	<div class="about">
	<a class="text">Login</a>
	<a class="textd">Use your username and password</a>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br>
<form name="Login" method="post" action="" align="center">
	<div class="heading"><h2>Enter Login Details</h2></div>
<br><br><br><br><br><br><br><br><br><br>
 Username:<br>
 <input type="text" name="username">
 <br>
 Password:<br>
<input type="password" name="password">
<br><br>
<input type="submit" name="submit" value="Submit">
<input type="reset">
</form>
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
