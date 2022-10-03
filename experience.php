<?php 

session_start();
$url='backgroundd.jpg';
 ?>


<?php 
$jobErr=$empErr=$cityErr=$stateErr=$fromErr=$toErr="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['txtjobtitle']))
  {
    $jobErr="Job title is rquired";
  }
    if(empty($_POST['txtemployer']))
  {
    $empErr="Employer is rquired";
  }
    if(empty($_POST['txtcity']))
  {
    $cityErr="Job locatoin is rquired";
  }
    if(empty($_POST['txtstate']))
  {
    $stateErr="Job location's state is rquired";
  }
    if(empty($_POST['txtstartdate']))
  {
    $fromErr="Start date is rquired";
  }
    if(empty($_POST['txtenddate']))
  {
    $toErr="End date is rquired";
  }
}
if(!empty($_POST['txtjobtitle']) and !empty($_POST['txtemployer']) and !empty($_POST['txtcity']) and !empty($_POST['txtstate']) and !empty($_POST['txtstartdate']) and !empty($_POST['txtenddate']))
{
  
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
if(isset($_POST['btnnext']))
{
   $uid=$_SESSION['uid'];
   $jobtitle=$_POST['txtjobtitle'];
   $employer=$_POST['txtemployer'];
   $city=$_POST['txtcity'];
   $state=$_POST['txtstate'];
   $startdate=$_POST['txtstartdate'];
   $enddate=$_POST['txtenddate']; 
   $qry="insert into experience(uid,jobtitle,employer,city,state,startdate,enddate) values('$uid','$jobtitle','$employer','$city','$state','$startdate','$enddate')"; 
   $data=mysqli_query($con,$qry);
   if($data)
   {
    ?>
<script type="text/javascript">
  location.href='qualification.php';
</script>
<?php 
   }
 
}
}
?>
 


<!DOCTYPE html>
<html>
<head>
	<title>Experience</title>
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
<div class="circle done"> <!--add the 'done' class for completed steps-->
<span class="label">1</span> <!--step number-->
<span class="title">Personal Details</span>
<span class="bar"></span>
</div>
<div class="circle active"> <!--add the 'active' class for the current step-->
<span class="label">2</span>
<span class="title">Experiences</span>
<span class="bar"></span>
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
       	  	<h1>Your Experience will be here.</h1>
       	  	<img src="images/experience.png">
       	  </div>
       	  <div class="col-sm-8">
       	  		<form  class="md-form" method="post" enctype="multipart/form-data">
       	  	<h1>Enter Your Experience here:-</h1>
       	          <div class="form-group">
                            <label for="job title">JOB TITLE:</label>
                            <input type="text" class="form-control" id="jobtitle" name="txtjobtitle">
                            <span class="error"> <?php echo $jobErr;?></span>
                  </div>
                  <div class="form-group">
                            <label for="employer">EMPLOYER:</label>
                            <input type="text" class="form-control" id="employer" name="txtemployer">
                            <span class="error"> <?php echo $empErr;?></span>
                  </div>
                  <div class="form-group">
                            <label for="city">CITY:</label>
                            <input type="text" class="form-control" id="city" name="txtcity">
                            <span class="error"> <?php echo $cityErr;?></span>
                  </div>
                  <div class="form-group">
                            <label for="state">STATE:</label>
                            <input type="text" class="form-control" id="state" name="txtstate">
                            <span class="error"> <?php echo $stateErr;?></span>
                  </div>
                  <div class="form-group">
                            <label for="startdate">START DATE:</label>
                            <input type="date" value="2019-01-01" class="form-control" id="startdate" name="txtstartdate">
                            <span class="error"> <?php echo $fromErr;?></span>
                  </div>
                  <div class="form-group">
                            <label for="enddate">END DATE:</label>
                            <input type="date" value="2019-01-01" class="form-control" id="enddate" name="txtenddate">
                            <span class="error"> <?php echo $toErr;?></span>
                  </div>
                  <div class="row">
                  	<div class="col-sm-6">
                  		<button type="button" name="btnprev" class="btn btn-primary btn-block" onClick="location.href='personaldetail.php'">PREVIOUS</button>
                  	</div>
                  	<div class="col-sm-6">
                  		<button type="submit" name="btnnext" class="btn btn-primary btn-block">SAVE AND NEXT</button>
                  	</div>
                  	
                  </div>
                  <div class="row" style="margin-top: 10px;margin-bottom: 10px;">
                      <div class="col-sm-12">
                      <button type="button" name="btnnext" class="btn btn-primary btn-block" onClick="location.href='qualification.php'">SKIP</button>
                    </div>
                  </div>
       	        </form>
       	  </div>
       </div>		
	</div>
</div>
</body>
</html>
