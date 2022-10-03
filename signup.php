

<?php
//connecting and adding the data to database
$url='backgroundd.jpg';
$con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"resumedata");

 if(isset($_POST['submit']))
 {
    $username=$_POST['txtusername'];
    $email=$_POST['txtemail'];
    $pass=$_POST['txtpass'];
    $confirm=$_POST['txtconfirm'];
 
    $qry_email="SELECT * FROM userdata WHERE email='$email'";
    $res_email=mysqli_query($con,$qry_email);
    if(mysqli_num_rows($res_email)>0)
    {
    	$emailErr="Email is already taken...!";
    }
    else
    {
            if(!empty($pass))
            {
            if(($pass==$confirm))

            {
            mysqli_query($con,"insert into userdata(username,email,password,confirm) values('$username','$email','$pass','$confirm')");
            header('location:login.php');
            mysqli_close($con);
            $username=$email=$pass=$confirm="";
            }
            else
            {
            echo "<script type='text/javascript'>alert('Password do not match or empty password feild')</script>";
            } 
            }

}
}

?>

<?php
// define variables and set to empty values
$username = $email  = $pass = $confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["txtusername"]);
  $email = test_input($_POST["txtemail"]);
  $pass = test_input($_POST["txtpass"]);
  $confirm = test_input($_POST["txtconfirm"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


  
<?php 
 //assigning error values for the error variables
$usernameErr=$emailErr=$passErr=$confirmErr="";
$username = $email  = $pass = $confirm = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   if(empty($_POST['txtusername']))
   {
   	$usernameErr="Name is Required";
   }
   else
   {
   	$username=test_input($_POST['txtusername']);
   }

 if (!preg_match("/^[a-zA-Z ]*$/",$username)) 
    {
      $usernameErr = "Only letters and white space allowed"; 
    }
   if(empty($_POST['txtemail']))
   {
   	$emailErr="E-mail is Required";
   }
   else
   {
   	$email=test_input($_POST['txtemail']);
   }

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }

   if(empty($_POST['txtpass']))
   {
   	$passErr="Password is Required";
   }
   else
   {
   	$pass=test_input($_POST['txtpass']);
   }

   if(empty($_POST['txtconfirm']))
   {
   	$confirmErr="Name is Required";
   }
   else
   {
   	$confirm=test_input($_POST['txtconfirm']);
   }
   if($pass!=$confirm)
   {
   	$confirmErr="Password not matched";
   }
  if(mysqli_num_rows($res_email)>0)
    {
    	$emailErr="Email is already taken...!";
    }
}

 ?>






<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		     <script src="jquery-3.3.1.min.js"></script>
             <script src="js/bootstrap.js"></script>
	         <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" type="text/css" href="login.css">

<script type="text/javascript">
function submitted() {
		document.getElementById('message').innerHTML="Now You Are Registered !!!!";
	}	
	
</script>
	<style type="text/css">
	body
	{
		background-image: url('<?php echo $url; ?>');
		background-position: fixed;
	}
</style>

</head>
<body>
<script type="text/javascript">
	function clear()
	{
		document.getElementByName('txtuser').value="";
	document.getElementByName('txte').value="";
		document.getElementByName('txtc').value="";
		document.getElementByName('txtp').value="";
			
	}
	window.onload=clear;
</script>
	
	<div class="container">
		<div class="row">
			<div class="well well-sm">
				<h1>USER SIGNUP</h1>
			</div>
			<div class="col-md-12">
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
			<div class="form-group has-feedback">
			   <h1><span class="glyphicon glyphicon-user form-control-feedback"></span></h1>
			   <input type="text" id="txtuser" name="txtusername" class="form-control input-lg" placeholder="User Name">
			   <span class="error"> <?php echo $usernameErr;?></span>
			</div>
			<div class="form-group has-feedback">
			   <h1><span class="glyphicon glyphicon-envelope form-control-feedback"></span></h1>
			   <input type="text" name="txtemail" id="txtem" class="form-control input-lg" placeholder="E-mail">
			   <span class="error"> <?php echo $emailErr;?></span>
			</div>
			<div class="form-group has-feedback">
			   <h1><span class="glyphicon glyphicon-lock form-control-feedback"></span></h1>
			   <input type="password" name="txtpass" id="txtp" class="form-control input-lg" placeholder="Password">
			   <span class="error"> <?php echo $passErr;?></span>
			</div>
			
			<div class="form-group has-feedback">
			    <h1><span class="glyphicon glyphicon-ok form-control-feedback"></span></h1>
	            <input type="password" name="txtconfirm" id="txtc" class="form-control input-lg" placeholder="Confirm Password">
	            <span class="error"> <?php echo $confirmErr;?></span>
			</div>
			<div class="alert alert-success" id="message" role="alert">
 </div>
			<div class="form-group">
				<a href="" style="text-decoration: none;"><input onClick="location.href='personaldetail.php'" type="submit" name="submit" class="btn btn-info btn-block input-lg" value="SIGN UP" onClick="submitted()">
			</a>
			</div>
      <div class="alert alert-success" id="message" role="alert" >OR
 </div>
          <div class="form-group">
      <a href="login.php" style="text-decoration: none;"><input type="button" name="button1" class="btn btn-info btn-block input-lg" value="SIGN IN" >
      </a>
      </div>
	      </form>
         <ul class="pager">
  <li><a href="home.php">HOME</a></li>

</ul>
			</div>
			
		</div>
		  
</div>
</body>
</html>