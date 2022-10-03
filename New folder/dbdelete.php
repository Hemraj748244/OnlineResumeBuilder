<?php 
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"department");
if(isset($_POST['btndelete']))
{
$no=$_POST['txteno'];
$sql=mysqli_query($conn,"delete from dept where emp_no=$no");
  if ($sql) {
      echo "Record deleted successfully";
   } else {
      echo "Error deleting record: " . mysqli_error($conn);
   }
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Deleting the record</title>
 </head>
 <body>
 <form action="" method="post">
 	Enter the Employee Number to delete;-<input type="text" name="txteno">
 	<br>
 	<input type="submit" name="btndelete" value="Delete">
 </form>
 </body>
 </html>