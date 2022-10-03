<?php 
$url = 'backgroundd.jpg';
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
$userErr=$passErr=$loginErr='';
if(isset($_POST['btnsubmit']))
{
	
	$email=$_POST['txtemail'];
    $password=$_POST['txtpassword'];
    $qry="select * from signuptab where email='$email' && password='$password' ";
    $data=mysqli_query($con,$qry);
    $total=mysqli_num_rows($data);
    if(empty($email))
    {
      $userErr="Please Enter The UserName";
    }
    if(empty($password))
    {
    	$passErr="Enter the password";
    }
    if($total==1)
    {
    	header('location:personaldetail.php');
    }
    else
    {
    	$loginErr="OOPS..! wrong email or password.";
    }
}

?>




<!DOCTYPE html>
<html>
<head>
	<title>Online Resume Builder</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="login.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<style type="text/css">
	body
	{
		background-image: url('<?php echo $url; ?>');
		background-position: fixed;
	}
</style>
</head>
<body>
	

	<div class="container">

		<div class="row">
			<div class="well well-sm">
				<h2><b>USER LOGIN</b></h2>
			</div>
			<div class="col-md-12">
		        <form action="#" method="post">
			            <div class="form-group has-feedback">
			            	<!--<label for="email">E-Mail:-</label>-->
			               <h1><span class="glyphicon glyphicon-user form-control-feedback"></span></h1>

			               <input type="text" name="txtemail" class="form-control input-lg" placeholder="E-mail">
			               <span class="error"> <?php echo $userErr;?> </span>
			            </div>
			<br>
			    <div class="form-group has-feedback">
			    	<!--<label for="password">Password:-</label>-->
			           <h1><span class="glyphicon glyphicon-lock form-control-feedback"></span></h1>
	                   <input type="Password" name="txtpassword" class="form-control  input-lg" placeholder="Password">
	                   <span class="error"> <?php echo $passErr;?> </span>
			    </div>
			    <div class="form-group">
			    	<span class="error"> <?php echo $loginErr;?> </span>
				        <center><input type="submit" name="btnsubmit" class="btn btn-info btn-block input-lg" value="SIGN IN"></center>

	            </div>
			    <div class="alert alert-danger fade-in" role="alert">
                        Don't have an acoount !
                </div>
	             <div class="form-group">
		                 <center>	<a href="signup.php" style="text-decoration: none;"><input type="button" class="btn btn-info btn-block  input-lg" value="SIGN UP" >	</a>
                         </center>
		         </div>
		        </form>

            </div>
           
	   </div>
    </div>

</body>
</html>







	


