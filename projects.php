<?php 

error_reporting(1);
 ?>


<?php 
$url='backgroundd.jpg';

?>


<?php 
$prjtitleErr=$aboutErr=$langErr=$timeErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
  if(empty($_POST["prjtitle"]))
  {
$prjtitleErr="Title is required";
  }
  if(empty($_POST["about"]))
  {
$aboutErr="About is required";
  }
    if(empty($_POST["lang"]))
    {
$langErr="language is required";
    }
      if(empty($_POST["prjtimetaken"]))
      {
$timeErr="time is required";
      }
}
if(!(empty($_POST["prjtitle"])) and !(empty($_POST["about"])) and !(empty($_POST["lang"])) and !(empty($_POST["prjtimetaken"])))
{
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
switch ($_POST["submit"]) 
{
  case 'addmore':
     $uid=$_SESSION['uid'];
  $prjtitle=$_POST['prjtitle'];
  $aboutprj=$_POST['about'];
  $lang=$_POST['lang'];
  $timetaken=$_POST['prjtimetaken'];
  $qry="INSERT INTO projects(uid,title,about,lang,duration) VALUES('$uid','$prjtitle','$aboutprj','$lang','$timetaken')";
  $data=mysqli_query($con,$qry);
    break;
  
  case 'save':
    $uid=$_SESSION['uid'];
  $prjtitle=$_POST['prjtitle'];
  $aboutprj=$_POST['about'];
  $lang=$_POST['lang'];
  $timetaken=$_POST['prjtimetaken'];
  $qry="INSERT INTO projects(uid,title,about,lang,duration) VALUES('$uid','$prjtitle','$aboutprj','$lang','$timetaken')";
  $data=mysqli_query($con,$qry);
    break;
}  
}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
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
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript" src="projects.js"></script>
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
<div class="circle done"> <!--no added class for future steps-->
<span class="label">3</span>
<span class="title">Education</span>
<span class="bar"></span>
</div>
<div class="circle done"> <!--no added class for future steps-->
<span class="label">4</span>
<span class="title">Skills</span>
<span class="bar"></span>
</div>
<div class="circle done"> <!--no added class for future steps-->
<span class="label">5</span>
<span class="title">Hobbies</span>
<span class="bar"></span>
</div>
<div class="circle done"> <!--no added class for future steps-->
<span class="label">6</span>
<span class="title">Softwares</span>
<span class="bar"></span>
</div>
<div class="circle active"> <!--no added class for future steps-->
<span class="label">7</span>
<span class="title">Projects</span>
</div>
</div>

<div class="wrapper">
	<div class="container">
     
              <div class="row">
                         <div class="col-sm-4">
                         	<h1>Your Project will be here.</h1>
                         	<img src="images/project.png">
                         </div>	

                         <div class="col-sm-8">

                         	
                            
                            
                             <form  class="md-form" onsubmit="return addmore();" method="post" enctype="multipart/form-data">
 <h1>Enter the projects you have done:-</h1>

  <div class="form-group">
       <label for="prjtitle">PROJECT TITLE:</label>
       <input type="text" class="form-control" id="title" name="txtprjtitle">
       <input type="hidden" id="prjtitle" name="prjtitle">
       <span class="error"> <?php echo $prjtitleErr;?></span>
  </div>
 
  <div class="form-group">
       <label for="aboutprj">ABOUT PROJECT:</label>
       <input type="text" class="form-control" id="about" name="txtabout">
       <input type="hidden" id="prjabout" name="about">
       <span class="error"> <?php echo $aboutErr;?></span>

  </div>

  <div class="form-group">
       <label for="prjlang">LANGUAGE USED:</label>
       <input type="text" class="form-control" id="language" name="txtlang">
       <input type="hidden" id="prjlang" name="lang">
       <span class="error"> <?php echo $langErr;?></span>

  </div>


  <div class="form-group">
       <label for="prjtime">TIME-TAKEN:</label>
       <input type="text" class="form-control" id="time" name="txttime">
       <input type="hidden" id="prjtime" name="prjtimetaken">
       <span class="error"> <?php echo $timeErr;?></span>

  </div>

 <div class="row">
    <div class="form-group col-sm-6">
             <button type="submit" class="btn btn-primary btn-block" name="submit" value="addmore" >ADD MORE</button>
        </div>
           <div class="form-group col-sm-6">
             <button type="submit" value="save" name="submit" class="btn btn-primary btn-block">SAVE</button>   
        </div> 
  </div>
  <div class="row">
        <div class="form-group col-sm-6">
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='qualification.php'">PREVIOUS</button>
        </div>
           <div class="form-group col-sm-6">
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='selecttemplate.php'">NEXT</button>
        </div>
                                 
       </div>
       <div class="row"> 
             <div class="form-group col-sm-12" style="margin-top: 10px; margin-bottom: 20px;" >
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='selecttemplate.php'">SKIP  </button>
        </div>
       </div>

</form>
</body>
</html>



