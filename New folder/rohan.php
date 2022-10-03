<html>
<head> 

</head>
<body>
<form action="" method="post">
<center>
<h2> Inserting into table Department </h2></br>
Enter Employee Number: <input type="text" name="txteno"></br></br>
Enter Department Number:     <input type="text" name="txtdno"></br></br>
Enter Department Name:       <input type="text" name="txtdname"></br></br>
<input type="submit" id="btnins" name="btn" value="INSERT" ></br></br>
<input type="submit" id="btndisp" name="btnd" value="DISPLAY"></br></br>
<input type="submit" id="btndel" name="btndel" value="DELETE"> </br></br>
<input type="submit" id="btnupd" name="btnu" value="UPDATE"></br></br>
<input type="submit" id="btnsrch" name="btns" value="SEARCH"></br></br>
</center>
</form>
<?php
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"department");
if(isset($_POST['btn']))
{
$a=$_POST["txteno"];
$b=$_POST["txtdno"];
$c=$_POST["txtdname"];

mysqli_query($con,"Insert into dept values('$a','$b','$c')");
ECHO "SAVED";
}



if(isset($_POST['btnd']))
{
 $res=mysqli_query($con,"Select * from department");
 	
	while($row=mysqli_fetch_array($res))
{
	echo "<table border=0>";
	echo "<tr>";
	echo "<td>".$row['emp_no']."</td>"."<td>".$row['dept_no']."</td>"."<td>".$row['dept_name']."</td>";
	echo "</tr>";
	echo "</table>";
}
}

if(isset($_POST['btndel']))
{
	$j=$_POST['txteno'];
	mysqli_query($con,"Delete from dept where emp_no='$j'");
 echo "Record Deleted";
	}	

if(isset($_POST['btnu']))
{
	$k=$_POST["txteno"];
	$b=$_POST["txtdno"];
    $c=$_POST["txtdname"];
    mysqli_query($con,"UPDATE `dept` SET `dept_no`='$b',`dept_name`='$c' WHERE emp_no='$k'");
	echo "Record Updated";
}



mysqli_close($con);

?>
</body>
</html>