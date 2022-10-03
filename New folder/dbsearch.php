<?php 
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"department")or die("Can not find database");
?>
 
 <?php 
if(isset($_POST['submit']))
{
	$eno=$_POST['txteno'];
	$dno=$_POST['txtdno'];
	$dname=$_POST['txtdname'];
	mysqli_query($conn,"insert into dept(emp_no,dept_no,dept_name) values('$eno','$dno','$dname')");
echo "Record Inserted";
}
?>

   <!DOCTYPE html>
<html>
<head>
	<title>Searching in the DB</title>
</head>
<body>
<form action="#" method="post">
	Enter The Emp_no to Search:-<input type="text" name="txtsear">
	<br>
	<input type="submit" name="btnsear" value="Search">
	<br>
	Enter the EmpLoyee Number:-<input type="text" name="txteno">
	<br>
	Enter the Department Number:-<input type="text" name="txtdno">
	<br>
	Enter the Department name:-<input type="text" name="txtdname">
	<br>
	<input type="submit" name="submit" value="submit">
</form>
<?php
 if(isset($_POST['btnsear']))
 {
 $no=$_POST['txtsear'];
$res=mysqli_query($conn,"select * from dept where emp_no=$no");
echo("<table border=1px>");
echo "<tr>"."<th>"."EmpLoyee No."."</th>"."<th>"."Dept No."."</th>"."<th>"."Dept Name"."</th>"."</tr>";
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>".$row['emp_no']."</td>"."<td>".$row['dept_no']."</td>"."<td>".$row['dept_name']."</td>";
echo "</tr>";
}
echo "</table>";
}
   ?>


   
</body>
</html>