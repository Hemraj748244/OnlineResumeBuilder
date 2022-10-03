<?php 
public function login()
{
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"signup");
if($con)
{
	echo "";
}
else
{
	die("Connection failed..!".mysqli_connect_error());
}
if(isset($_POST['btnsubmit']))
{
	global $total;
	$email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $qry="select * from signuptab where email='$email' && password='$password' ";
    $data=mysqli_query($con,$qry);
     $total=mysqli_num_rows($data);
    if($total==1)
    {
    	header('location:personaldetail.php');
    }
    else
    {
    	$total="OOPS..! wrong email or password.";
    }
}
	
}

?>
