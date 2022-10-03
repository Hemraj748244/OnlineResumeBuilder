<?php 
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"department")or die("Can not find database");
$res=mysqli_query($conn,"select * from dept");
echo("<table border=1px>");
echo "<tr>"."<th>"."EmpLoyee No."."</th>"."<th>"."Dept No."."</th>"."<th>"."Dept Name"."</th>"."</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['emp_no']."</td>"."<td>".$row['dept_no']."</td>"."<td>".$row['dept_name']."</td>";
echo "</tr>";
}
echo "</table>";

?>
 
 <?php 
if(isset($_POST['submit']))
{
	$eno=$_POST['txteno'];
	$dno=$_POST['txtdno'];
	$dname=$_POST['txtdname'];
	mysqli_query($conn,"UPDATE `dept` SET `dept_no`='$dno',`dept_name`='$dname' WHERE emp_no='$eno'");
echo "Record Updated";
}
?>

   <!DOCTYPE html>
<html>
<head>
	<title>Updating in the DB</title>
</head>
<body>
<form action="#" method="post">

	Enter the EmpLoyee Number to Update:-<input type="text" name="txteno">
	<br>
	Enter the New Department Number:-<input type="text" name="txtdno">
	<br>
	Enter the New Department name:-<input type="text" name="txtdname">
	<br>
	<input type="submit" name="submit" value="Update">
</form>

</body>
</html>