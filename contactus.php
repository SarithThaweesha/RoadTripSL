<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ContactUs</title>
<style type="text/css">
	body{
		margin: 0;
		background-color: white;
		
	}
	
	.about{
	width: 1520px;
  max-width: 2000px;
		height: 270px;
  position: absolute;top: 100px;
  margin: auto;
	background-color: mediumslateblue;	
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
    top: 120px;
    width: 1000px;
	left: 260px;
    text-align: center;
    font-family: allan;
    text-shadow: 0 0 30px grey;
    font-style: normal;
    font-weight: 400;
		
	}
	.para{
		position:absolute;
		left: 3%;
		font-family: alegreya;
		font-size: 25px;	
		font-weight: 545;
		line-space: 0.7px;
		border: 1px solid white;
		padding: 1px;
		 width: 1450px;
		height: 100px;
		text-align: justify;
		
	}
	.bottom {
		position:absolute;
		left:0%;
		top:150%;
		background-color:mediumslateblue;
		font-family:alegreya;
		font-weight:500;
		font-size: 20px;
		color: #fffafa;
		height: 300px;
		width:1520px;
	}
	
.background {
  position: absolute;
  top: 60%;
  right: 0%;
  left: 0%;
  background-image: url("website pics/R.jpg");
  border: 2px solid black;
  height: 550px;
}

.transbox {
  margin: 30px;
  background-color:darkseagreen;
  border: 1px solid black;
  opacity: 0.6;
	height: 450px;
}

.transbox a.transboxd  {
  margin: 10%;
  font-weight: bold;
  color: #000000;
	font-size: 50px;
	
}
	.transbox a.details  {
  position: absolute;
  left: 20%;
  margin: 0%;
  font-weight: bold;
  color: maroon;
  font-size: 30px;
 
		
}
	
</style>
</head>
	

<body>

	<?php include("navigation.html") ?>
	
	<div class="about">
	<a class="text">Contact us</a>
	<a class="textd">Feel free to call or send us an E-mail.</a>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	
	<div class="background">
    <div class="transbox"><br>
    <a class="transboxd">Address</a><br><br>
	<a class="details">No.12/13,Colombo Road,Negombo,Sri Lanka.</a>
	<br><br><br>
		
	<a class="transboxd">E-mail</a><br><br>
	<a class="details">roadtripsrilanka11@gmail.com</a>
	<br><br><br>
		
	<a class="transboxd">Customer Support</a><br><br>
	<a class="details">Hotline:- +94 766 565656<br>
		  Phone:- +94 31 2333333
	  
    </a>
    </div>
		
		
</div>
	
	
	<div class="bottom" style="text-align:center">
	<br><br><br>
  <a href="aboutus.php" style="color:#fffafa">Contact Us</a>
	<br><br>
	<a href="#Partner" style="color:#fffafa">Partner with Us</a><br><br><br>
	<hr width="1000px" align="center"> <br>
	<p> &#169; 2021 ROADTRIP SRI LANKA.   All rights reserved.</p>
    
</div>
</body>
</html>

