<!DOCTYPE html>
<html>
<head>
	<title>Operator</title>
</head>
<body>
<form action="" method="post">
Enter A Integer Number  :- <input type="text" name="num">
<br>
<input type="submit" name="incr" value="Increment"><br><input type="submit" name="decr" value="Decrement">	
</form>
<?php
if(isset($_POST['incr']))
{
	$a=$_POST['num'];
	$n=++$a;
	echo "Incremented value of number is:-".$n;
}
if(isset($_POST['decr']))
{
	$a=$_POST['num'];
	$n=--$a;
	echo "Decremented value of number is:-".$n;
}	
?>
</body>
</html>