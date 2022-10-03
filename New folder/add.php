<!DOCTYPE html>
<html>
<head>
	<title>PHP demo</title>
</head>
<body>

<?php
echo "First number is:-".$_POST['num1']."<br>";
echo "Second number is:-".$_POST['num2'];
$n1=$_POST['num1'];
$n2=$_POST['num2'];
$s=$n1+$n2;
echo "<br>";
echo "Sum is:-".$s;
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>




<form action="" method="POST">
First  Number:	<input type="text" name="num1">
	<br>
Second Number:	<input type="text" name="num2">
	<br>
	<input type="submit" name="submit">
</form>
</body>
</html>