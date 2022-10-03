<?php
$connect = mysqli_connect("localhost","root","");	
mysqli_select_db($connect,"my_detail") or die("can't find the db");
if(isset($_POST['submit']))
{
$name = $_POST['txtname'];
$fn = $_POST['txtfname'];
$mn = $_POST['txtmname'];
mysqli_query($connect,"insert into detail(name,fname,mname) values('$name','$fn','$mn')");
mysqli_close($connect);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
<form action="#" method="post">
	Enter the Name:-<input type="text" name="txtname">
	<br>
	Enter the faher's name:-<input type="text" name="txtfname">
	<br>
	Enter the mother's name:-<input type="text" name="txtmname">
	<br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>