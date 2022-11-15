<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style type="text/css">
		.txt{
			font-size: 40px;
			text-align: center;
			left: 30%;
		}
			body{
		background-color: white;
	}
		
	
	
	</style>
</head>

<body>   
<?php 
 include("navigation.html") ;
	
if(isset($_POST['submit'])) {  

include ("connection.php");

	
   
   $fnam=$_POST['name'];
   $email=$_POST['email'];
   $age=$_POST['age'];
   $mobile=$_POST['mobile'];	
   $uname=$_POST['username'];
   $password=$_POST['password'];
   
    
	$sql = "INSERT INTO customer ". "(Cname,email,age,mobile,userName,password) ". "VALUES('$fnam','$email','$age','$mobile','$uname','$password')";
	
	$results = mysqli_query($connec, $sql);
            
            if(!$results) {
               die('Could not enter data: ' . mysqli_error($connec));
            }
			else
			{
            echo "\n";
			}	
     } 
   
else {//if(isset($_POST['submit'])) {  

    echo " Your form is not submitted yet please fill the form and visit again";
  } 
?>
	

</body>
</html>
