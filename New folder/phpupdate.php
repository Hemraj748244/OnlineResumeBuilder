<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<?php
if(isset($_POST['submit']))
{
    
   $hostname = "localhost";
   $username = "root";
   $password = "";
   $databaseName = "department";
   
   $connect = mysqli_connect($hostname, $username, $password, $databaseName);
   

   $eno = $_GET['txtno'];
   $dno = $_GET['txtdno'];
   $dname = $_GET['txtdname'];
   

   $result = mysqli_query($connect,'UPDATE dept SET emp_no='.$eno.',dept_no='.$dno.',dept_name='.$dname.' where emp_no=1');
   }
   $result=mysqli_query($connect,"select * from dept");
  while ($row = mysqli_fetch_array($result)) {
echo "<b><a href='updatephp.php?update={$row['emp_no']}'>{$row['dept_no']}</a></b>";
echo "<br />";
}
?>
<?php 
if(isset($_GET['update']))
{
 $update=$_GET['update'];
 $result1=mysqli_query($connect,"select * from dept where emp_no=$update");
 while ($row1 = mysqli_fetch_array($result1)) {
  echo "<form  method='get'>";
  echo "<label>" . "Emp_no:" . "</label>" . "<br />";
  echo "<input type="text" name="txtno" value="{$row1['emp_no']}" />";
echo "<label>" . "Dept_no" . "</label>" . "<br />";
  echo "<input type="text" name="txtdno" value="{$row1['dept_no']}"/>";
echo "<label>" . "Dept_name:" . "</label>" . "<br />";
echo "<input type="text" name="txtdname" value="{$row1['dept_name']}"/>";

echo "<input  type='submit' name='submit' value='update' />";
echo "</form>";
}
}

if (isset($_GET['submit'])) {
echo "Data Updated Successfuly";
}
 ?>
<?php
mysql_close($connect);
?>
</body>
</html>