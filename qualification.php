<?php 
error_reporting(1);
?>

<?php 
session_start();
$url='backgroundd.jpg';
 ?>


 <?php
$err1=$err2=$err3=$err4=$err5=$err6=$err7=""; 
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['degree']))
  {
    $err1="**degree";
  }
  if(empty($_POST['institute']))
  {
      $err2="**institute";
  }
  if(empty($_POST['univer']))
  {
      $err3="**university";
  }
  if(empty($_POST['spec']))
  {
      $err4="**specialization" ;
  }
  if(empty($_POST['indate']))
  {
      $err5="**start date";
  }
  if(empty($_POST['outdate']))
  {
     $err6="**end date";
  }
  if(empty($_POST['per']))
  {
     $err7="**percentage";
  }
  


}
if(!(empty($_POST['degree'])) and !(empty($_POST['institute'])) and !(empty($_POST['univer'])) and !(empty($_POST['spec'])) and !(empty($_POST['indate'])) and !(empty($_POST['outdate'])) and !(empty($_POST['per'])))
{

$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");

switch($_POST['submit'])
 {
  case 'save':
    
     
     $uid=$_SESSION['uid'];
     $degree=$_POST['degree'];
     $inst=$_POST['institute'];
     $univ=$_POST['univer'];
     $spec=$_POST['spec'];
     $sdate=$_POST['indate'];
     $edate=$_POST['outdate'];
     $percent=$_POST['per'];
      $qry="insert into education(uid,degree,institute,university,specialization,startd,endd,percentage) values('$uid','$degree','$inst',' $univ','$spec','$sdate','$edate','$percent')";
      $data=mysqli_query($con,$qry);
      break;
  
  case 'addmore':
     $uid=$_SESSION['uid'];
     $degree=$_POST['degree'];
     $inst=$_POST['institute'];
     $univ=$_POST['univer'];
     $spec=$_POST['spec'];
     $sdate=$_POST['indate'];
     $edate=$_POST['outdate'];
     $percent=$_POST['per'];
     $qry="insert into education(uid,degree,institute,university,specialization,startd,endd,percentage) values('$uid','$degree','$inst',' $univ','$spec','$sdate','$edate','$percent')";
  $data=mysqli_query($con,$qry);

    break;
}
}
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Education Qualification</title>
	<style type="text/css">
		body
		{
			background-image: url('<?php echo $url; ?>')
		}
    .error
    {
      color: red;
    }
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<link rel="stylesheet" type="text/css" href="progressbar.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="education.js"></script>
</head>
<body>
    
<div class="progress">
<div class="circle done"> <!--add the 'done' class for completed steps-->
<span class="label">1</span> <!--step number-->
<span class="title">Personal Details</span>
<span class="bar"></span>
</div>
<div class="circle done"> <!--add the 'active' class for the current step-->
<span class="label">2</span>
<span class="title">Experiences</span>
<span class="bar"></span>
</div>
<div class="circle active"> <!--no added class for future steps-->
<span class="label">3</span>
<span class="title">Education</span>
<span class="bar"></span>
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
                         	<h1>Your Qualifications will be here.</h1>
                         	<img src="images/education.png">
                         </div>	

                         <div class="col-sm-8">

                         	
                            
                            
<form  class="md-form"  method="post" onsubmit="return addmore();" enctype="multipart/form-data" >
 <h1>Enter The Educational Qualification:-</h1>

  <div class="form-group">
       <label for="degree">ENTER DEGREE:</label>
       <input type="text" class="form-control" id="degree" name="txtdegree">
       <input type="hidden" name="degree" id="txtdegree">
       <span class="error"> <?php echo $err1;?></span>
  </div>
  <div class="form-group">
       <label for="institution">ENTER THE NAME OF INSTITUTION:</label>
       <input type="text" class="form-control" id="institution" name="txtinst">
       <input type="hidden" name="institute" id="txtinst">
       <span class="error"> <?php echo $err2;?></span>

  </div>
  <div class="form-group">
       <label for="univercity">ENTER THE BOARD/UNIVERCITY:</label>
       <input type="text" class="form-control" id="univercity" name="txtuniver">
       <input type="hidden" name="univer" id="txtuniver">
       <span class="error"> <?php echo $err3;?></span>

  </div>
  <div class="form-group">
       <label for="specialization">ENTER THE SPECIALIZATION:</label>
       <input type="text" class="form-control" id="specialization" name="txtspec">
       <input type="hidden" name="spec" id="txtspec">
       <span class="error"> <?php echo $err4;?></span>

  </div>
    <div class="form-group">
       <label for="fromdate">FROM DATE:</label>
       <input type="date" class="form-control" id="fromdate" name="txtfrom" value="2019-01-01">
       <input type="hidden" name="indate" id="txtstart">
       <span class="error"> <?php echo $err5;?></span>

  </div>
    <div class="form-group">
       <label for="todate">TO DATE:</label>
       <input type="date" class="form-control" id="todate" name="txttodate" value="2019-01-01">
       <input type="hidden" name="outdate" id="txtend">
       <span class="error"> <?php echo $err6;?></span>

  </div>
  <div class="form-group">
       <label for="percent">PERCENTAGE:</label>
       <input type="text" class="form-control" id="percent" name="txtpercent">
       <input type="hidden" name="per" id="txtper">
       <span class="error"> <?php echo $err7;?></span>

  </div>
  <div class="row">
  	<div class="form-group col-sm-6">
             <button type="submit" name="submit" class="btn btn-primary btn-block"  value="addmore">ADD MORE</button>
        </div>
          <div class="form-group col-sm-6">
             <button type="submit" name="submit" id="next" value="save" class="btn btn-primary btn-block">SAVE</button>   
        </div>
  </div>
  <div class="row">
        <div class="form-group col-sm-6">
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='experience.php'">PREVIOUS</button>
        </div>
        <div class="form-group col-sm-6">
          <button type="button" id="next" name="btnnext" onClick="location.href='skills.php'" class="btn btn-primary btn-block">
            NEXT
          </button>
        </div>
                                   
       </div>

</form>
</body>
</html>







