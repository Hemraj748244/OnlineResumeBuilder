<!DOCTYPE html>
<html>
<head>
	<title>Swapping two numbers</title>
</head>
<body>
<center><h1>swapping two numbers</h1></center>
<form action="#" method="POST">
Enter the First Number:-<input type="text" name="txtfirst">
<br>
Enter the Second Number:-<input type="text" name="txtsecond">
<br>
<input type="submit" name="submit">
</form>
<?php 
if(isset($_POST['submit']))
{
$a=$_POST['txtfirst'];
$b=$_POST['txtsecond'];
$c=$a;
$a=$b;
$b=$c;
echo "First Number Is :-".$a."&nbsp&nbsp"."Second Number Is:-".$b;

}
 ?>
</body>
</html>