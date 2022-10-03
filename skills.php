<?php 
session_start();
$url='backgroundd.jpg';
 ?>



<?php 
$err1=$err2=$err3=$err4=$err5="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['txtskill1']))
  {
    $err1="**required";
  }
  if(empty($_POST['txtskill2']))
  {
    $err2="**required";
  }
  if(empty($_POST['txtskill3']))
  {
    $err3="**required";
  }
  if(empty($_POST['txtskill4']))
  {
    $err4="**required";
  }
  if(empty($_POST['txtskill5']))
  {
    $err5="**required";
  }
}
if(!empty($_POST['txtskill1']) and !empty($_POST['txtskill2']) and !empty($_POST['txtskill3']) and !empty($_POST['txtskill4']) and !empty($_POST['txtskill5']))
{
  if ($_SESSION['uid'] == '')
{
    ?>
    <script type="text/javascript">
      window.alert("session expired !");
    </script>
    <?php
}
else
{
$uidd=$_SESSION['uid'];
}
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");

if(isset($_POST['submit']))
{
  $userid=$uidd;
  $skill1 = $_POST['txtskill1'];
  $skill2 = $_POST['txtskill2'];
  $skill3 = $_POST['txtskill3'];
  $skill4 = $_POST['txtskill4'];
  $skill5 = $_POST['txtskill5'];

$qry="insert into skills values('$userid','$skill1','$skill2','$skill3','$skill4','$skill5')";
$data=mysqli_query($con,$qry);
if($data)
{
 header('location:hobbies.php');
}
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Skills</title>
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
<div class="circle active"> <!--no added class for future steps-->
<span class="label">4</span>
<span class="title">Skills</span>
<span class="bar"></span>
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
                         	<h1>Your Skills will be here.</h1>
                         	<img src="images/skills.png">
                         </div>	

                         <div class="col-sm-8">

                         	
                            
                            
                             <form class="md-form" method="post" enctype="multipart/form-data">
 <h1>PUT YOUR 4-5 SKILLS:-</h1>

  <div class="form-group">
       <label for="skill">SKILL 1:</label>
       <input type="text" class="form-control" id="skill1" name="txtskill1">
<span class="error"> <?php echo $err1;?></span>
  </div>
 
  <div class="form-group">
       <label for="skill">SKILL 2:</label>
       <input type="text" class="form-control" id="skill2" name="txtskill2">
       <span class="error"> <?php echo $err2;?></span>
  </div>

  <div class="form-group">
       <label for="skill">SKILL 3:</label>
       <input type="text" class="form-control" id="skill3" name="txtskill3">
       <span class="error"> <?php echo $err3;?></span>
  </div>


  <div class="form-group">
       <label for="skill">SKILL 4:</label>
       <input type="text" class="form-control" id="skill4" name="txtskill4">
       <span class="error"> <?php echo $err4;?></span>
  </div>

  <div class="form-group">
       <label for="skill">SKILL 5:</label>
       <input type="text" class="form-control" id="skill5" name="txtskill5">
       <span class="error"> <?php echo $err5;?></span>
  </div>
 
  <div class="row">
        <div class="form-group col-sm-6">
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='qualification.php'">BACK</button>
        </div>

         <div class="form-group col-sm-6">
             <button type="submit" class="btn btn-primary btn-block" name="submit">SAVE AND NEXT</button> 	
        </div>                            
       </div>
       <div class="row">
         <div class="col-sm-12">
            <button type="button" class="btn btn-primary btn-block" onClick="location.href='hobbies.php'">SKIP</button>
         </div>
       </div>

</form>
</body>
</html>



 
