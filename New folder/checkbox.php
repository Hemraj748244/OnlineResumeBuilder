<!DOCTYPE html>
<html>
<head>
	<title>CheckBox Selection</title>

</head>
<body>
 
<form action="" method="post">
	Enter the Name:-<input type="text" name="txtname">
	<br>
	Enter the Age:-<input type="text" name="txtage">
	<br>
	Select the Subject:-<select name="subject[]">
		<option name="bsc">BSC</option>
		<option name="bca">BCA</option>
		<option name="bcom">BCOM</option>
		<option name="bba">BBA</option>
	</select>
	<br>
	Select your Hobbies:-<input type="radio" name="indoor" value="Indoor">Indoor</input>
	<input type="radio" name="indoor" valuExe="outdoor">Outdoor</input>
	<br>
	Select Your Choice:-<input type="CheckBox" name="chksub[]" value="php">PHP</input>
<input type="CheckBox" name="chksub[]" value="html">HTML</input>
<input type="CheckBox" name="chksub[]" value="css">CSS</input>
<input type="CheckBox" name="chksub[]" value="js">JS</input>
<input type="CheckBox" name="chksub[]" value=".Net">.NET</input>
<br>
<input type="submit" name="submit">
</form>

<div style="font-weight: bold;font-family: arial;font-size: 20px;">
	<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"registration");
if(isset($_POST['submit']))
{

	$name=$_POST['txtname'];
	$age=$_POST['txtage'];
	echo "Your Name Is:-".$name;
	echo "<br>";
	echo "Your Age Is:-".$age;
	echo "<br>";
	if(!empty($_POST['subject']))
{
	foreach ($_POST['subject'] as $value) {
		echo "your Course Subject Is:-".$value;
	}
}
echo "<br>";
$selected_val = $_POST['indoor']; 
 echo "Your hobbies are:" .$selected_val;
 echo("<br>");
	if(!empty($_POST['chksub']))
	{
		echo "your selecteds subjects are:-";
	foreach($_POST['chksub'] as $val) {
		
		echo $val."<br>";
	}
}
mysqli_query($con,"insert into reg(name,age,subject,hobbies,choice) values('$name','$age','$value','$selected_val','$val')");
mysqli_close($con);

}



	?>

</div>
</body>
</html>