<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="test.js"></script>
</head>
<body>
<?php 
if(isset($_POST["submit"]))
{
	$name=$_POST["hi"];
	echo "$name";
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"resumedata");
	$qry="insert into test values('','$name');";
	$data=mysqli_query($con,$qry);
	if($data)
	{
		echo "record successfully addedd";
	}
}


 ?>
<form method="post" action="#" onsubmit="return fill();">
	<input type="text" name="txtname" id="txtid">
    <input type="hidden" name="hi" id="t">
    <input type="submit" name="submit">
</form>
</body>
</html>