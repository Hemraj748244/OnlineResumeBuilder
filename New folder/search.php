<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"registration");
$sn=isset($_POST['txtsear']);
$res=mysqli_query($con,"select * from search where name LIKE '%{$sn}%'");
if(isset($_POST['sear']))
{
	echo "<table>";
	while($row=mysqli_fetch_array($res))
	{
echo "<tr>";
echo "<td>".$row['rollno']."</td>"."<td>".$row['name']."</td>"."<td>".$row['age']."</td>";
echo "</tr>";
	}
	echo "</table>";
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>	
<form action="" method="post" onsubmit="return check()">
	Enter the Name to Search:-<input type="text" name="txtsear">
	<br>
	<input type="submit" name="sear" value="Search"><br>
	Enter the Name:-<input type="text" name="txtname" id="name"><div id="msg"></div>
	
	Ebter the RollNumber:-<input type="text" name="txtrno">
	<br>
	Enter the Subject:-<input type="text" name="txtsub">
	<br>
 </form>
</body>
</html>
