<?php 
session_start();
$url='backgroundd.jpg';


 ?>








<?php 
$fnameErr=$mnameErr=$lnameErr=$dobErr=$mobileErr=$addressErr=$carrErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST['txtfname']))
    {
        $fnameErr=" First  Name is required";
    }
        if(empty($_POST['txtlname']))
    {
        $lnameErr="Last Name is required";
    }
        if(empty($_POST['txtmname']))
    {
        $mnameErr=" Middle Name is required";
    }
        if(empty($_POST['txtdob']))
    {
        $addressErr="DOB is required";
    }
        if(empty($_POST['txtmobile']))
    {
        $mobileErr="Mobile Number is required";
    }
        if(empty($_POST['txtaddress']))
    {
        $addressErr="Address is required";
    }
        if(empty($_POST['txtobj']))
    {
        $carrErr="Career Objective is required";
    }

}
if(!empty($_POST['txtfname']) and !empty($_POST['txtmname']) and !empty($_POST['txtmname']) and !empty($_POST['txtdob']) and !empty($_POST['txtmobile']) and !empty($_POST['txtaddress']) and !empty($_POST['txtobj']))
{
    $con = mysqli_connect("localhost","root","");
$db = mysqli_select_db($con,"resumedata");
if(isset($_POST['submit']))
{
    $uid=$_SESSION['uid'];
    $fname=$_POST['txtfname'];
    $mname=$_POST['txtmname'];
    $lname=$_POST['txtlname'];
    $dob=$_POST['txtdob'];
    $mobile=$_POST['txtmobile'];
    $address=$_POST['txtaddress'];
    $carrobj=$_POST['txtobj'];
    $data= mysqli_query($con,"insert into personal values('$uid','$fname','$mname','$lname','$dob','$mobile','$address','$carrobj')");
if($data)
{
        header('location:experience.php');

}

mysqli_close($con);
}
}





 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Personal details</title>
	<style type="text/css">
		body
		{
			background-image: url('<?php echo $url; ?>')

		}
        span  
        {
            color: red;
        }
	</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<link rel="stylesheet" type="text/css" href="progressbar.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
<div class="progress">
<div class="circle active"> <!--add the 'done' class for completed steps-->
<span class="label">1</span> <!--step number-->
<span class="title">Personal Details</span>
<span class="bar"></span>
</div>
<div class="circle"> <!--add the 'active' class for the current step-->
<span class="label">2</span>
<span class="title">Experiences</span>

</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">3</span>
<span class="title">Education</span>
</div>
<div class="circle "> <!--no added class for future steps-->
<span class="label">4</span>
<span class="title">Skills</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">5</span>
<span class="title">Hobbies</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">6</span>
<span class="title">Softwares</span>
</div>
<div class="circle"> <!--no added class for future steps-->
<span class="label">7</span>
<span class="title">Projects</span>
</div>
</div>

<div class="wrapper">
	<div class="container">
     
              <div class="row">
                         <div class="col-sm-4">
                         	<h1>Your address will be here.</h1>
                         	<img src="images/personalinfo.png">
                         </div>	

                         <div class="col-sm-8">

                         	<form class="md-form" method="post" enctype="multipart/form-data">
                            
                             <h1>Enter The Personal Details-</h1>

                            <div class="form-group">
                                <label for="FIRST NAME">FIRST NAME:</label>
                                <input type="text" class="form-control" id="firstname" name="txtfname">
                                <span class="error"> <?php echo $fnameErr;?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="MIDDLE NAME">MIDDLE NAME:</label>
                                <input type="text" class="form-control" id="midname" name="txtmname">
                                <span class="error"> <?php echo $mnameErr;?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="LAST NAME">LAST NAME:</label>
                                <input type="text" class="form-control" id="lastname" name="txtlname">
                                <span class="error"> <?php echo $lnameErr;?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="DOB">DATE OF BIRTH:</label>
                                <input type="date" class="form-control" id="dob" name="txtdob" value="2019-01-01">
                                <span class="error"> <?php echo $dobErr;?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="MOBILE">MOBILE NUMBER:</label>
                                <input type="text" class="form-control" id="mobile" name="txtmobile">
                                <span class="error"> <?php echo $mobileErr;?></span>
                           </div>
                            
                            <div class="form-group">
                                <label for="ADDRESS">ADDRESS:</label>
                                <input type="text" class="form-control" id="address" name="txtaddress">
                                <span class="error"> <?php echo $addressErr;?></span>
                            </div>
                            
                            <div class="form-group">
                                <label for="CAREER OBJECTIVE">CAREER OBJECTIVE:</label>
                                <textarea type="text" class="form-control" id="objective" name="txtobj"></textarea>
                                <span class="error"> <?php echo $carrErr;?></span>
                            </div>
                            
                           <div class="row">
                           	<div class="form-group col-sm-6">
                            	<button type="button"  class="btn btn-primary btn-block" onClick="location.href='home.php'">BACK</button>
                            </div>

                           	 <div class="form-group col-sm-6">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">SAVE AND NEXT</button> 	
                            </div>                            
                           </div>
 
                        </form>
                         </div>
                         
        </div>
                            
 </div>
</div>                


</body>
</html>