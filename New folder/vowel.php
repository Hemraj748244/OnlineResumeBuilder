<!DOCTYPE html>
<html>
<head>
	<title>Check Vowel</title>
</head>
<body>
<form>
	Enter the Character:-<input type="text" name="txtchar">
	<br>
	<input type="submit" name="submit">
</form>
<?php
$c=$_POST['txtchar'];
if (($c =='a')|| ($c =='e') ||($c =='i')|| ($c =='o')||($c =='u')) 
{
	echo "Entered Character is Vowel";
}
else
{
	echo "Entered Character is Consonant";
}


?>
</body>
</html>