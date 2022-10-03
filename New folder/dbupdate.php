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
	<input type="submit" name="btnupate" value="Update">
	</form>
</body>
</html>

<?php 
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"department")or die("Can not find database");
$eno=$_POST['txtsear'];
$res=mysqli_query($conn,"select * from dept where emp_no=$eno");
$row=mysqli_fetch_array($res)

	?>

	Employee Number:- &nbsp
<input type="text" name="txteno" value="<?php echo $row['emp_no']?>">
<br>
	Department Number:- &nbsp
<input type="text" name="txtdno" value="<?php echo $row['dept_no']?>">
<br>
	Department Name:- &nbsp
<input type="text" name="txtdname" value="<?php echo $row['dept_name']?>">
<br>
<?php
if (isset($_POST['btnupate'])) {
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"department")or die("Can not find database");
$eno=$_POST['txtsear'];
$no=$_POST['txteno'];
$dno=$_POST['txtdno'];
$dnm=$_POST['txtdname'];
$res=mysqli_query($conn,"update dept set emp_no=$no,dept_no=dno, dept_name=dn where emp_no=$eno");	
}
?>

