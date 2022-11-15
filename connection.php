<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$dbhost='localhost';
$dbuser='root';
$dbpassword='';
$connec= mysqli_connect($dbhost,$dbuser,$dbpassword);//this opens a connection to mysqli server

	if(!$connec){
	die('could notconnect: '.mysqli_error($connec));
	}
	echo '';
	
$db=mysqli_select_db($connec,'webassignment');
	if(!$db){
		echo 'select database first';
		
	} else
		echo "You're successfully registered with ROADTRIP SRI LANKA.Now you can purchase our discounted packages and many more offers are on the way.";//mysqli close($connec);
	
?>
</body>
</html>
