<?php 
$servername="localhost";
$Password="";
$username="root";
$dbname="ajeet";
$conn=mysqli_connect($servername,$username,$Password,$dbname);


$nm=$_GET['txtname'];
$pass=$_GET['txtpass'];
$ph=$_GET['txtmobile'];


if(isset($_GET['btnsubmit']))
{
	$qry="INSERT INTO raj VALUES('$nm','$pass','$ph')";
	$res=mysqli_query($conn,$qry);
if($res)
{
	echo "REcord Inserted";
}
}

 ?>





<!DOCTYPE html>
<html>
<head>
	<title>DATABASE CONNECTIVITY</title>
</head>
<body>
<form method="get" action="#">
	Enter the Username:-<input type="text" name="txtname">
	<br>
	Enter the Password:-<input type="text" name="txtpass">
	<br>
	Enter the Mobile Number:-<input type="text" name="txtmobile">
<br>
<input type="submit" name="btnsubmit">
</form>
</body>
</html>