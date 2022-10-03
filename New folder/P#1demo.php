<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
$conn = mysqli_connect($servername,$username,$password,$dbname);
error_reporting(0);
if(isset($_POST['submit']))
{
$n=$_POST['txtname'];
$a=$_POST['txtage'];
$sql=mysqli_query($conn,"INSERT INTO MY_dEMO VALUES('$n','$a')");
if($sql)
{
	echo "Record inserted succesfully";
}
else
{
	echo "Error while inserting the record";
}
}
if(isset($_POST['display']))
{
	$sql=mysqli_query($conn,"SELECT * FROM MY_DEMO");
	echo "<table>";
	echo "<tr>";
	echo "<th>"."Name"."</th>";
	echo "<th>"."Age"."</th>";
echo "</tr>";
while($row=mysqli_fetch_array($sql))
{
	echo "<tr>";
	echo "<td>".$row[name]."</td>";
	echo "<td>".$row[age]."</td>";
	echo "</tr>";
}
echo "</table>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="post">
	Enter the Name:-<input type="text" name="txtname">
	<br>
	Enter the Age:-<input type="text" name="txtage">
	<br>
	<input type="submit" name="submit" value="Submit the Data">
<input type="submit" name="display" value="display Records">
</form>
</body>
</html>
