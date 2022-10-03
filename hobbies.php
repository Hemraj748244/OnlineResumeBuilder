<?php 
session_start();
$url='backgroundd.jpg';
 ?>

<?php 
$hb1="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['txthobby1']))
  {
    $hb1="Required";
  }
    if(empty($_POST['txthobby4']))
  {
    $hb1="Required";
  }
    if(empty($_POST['txthobby2']))
  {
    $hb1="Required";
  }
    if(empty($_POST['txthobby3']))
  {
    $hb1="Required";
  }
}
if(!empty($_POST['txthobby1']) and !empty($_POST['txthobby2']) and !empty($_POST['txthobby3']) and !empty($_POST['txthobby4']))
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
$uiddd=$_SESSION['uid'];
}
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
$userid=$_SESSION['uid'];


if(isset($_POST['submit']))
{
  $user=$userid;
  $hobby1 = $_POST['txthobby1'];
  $hobby2 = $_POST['txthobby2'];
  $hobby3 = $_POST['txthobby3'];
  $hobby4 = $_POST['txthobby4'];
 

$qry="insert into hobby values('$user','$hobby1','$hobby2','$hobby3','$hobby4')";
$data=mysqli_query($con,$qry);
if($data)
{
 header('location:software.php');
}
}
}
 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Softwares</title>
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
<div class="circle active"> <!--no added class for future steps-->
<span class="label">5</span>
<span class="title">Hobbies</span>
<span class="bar"></span>
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
                         	<h1>Your hobbies will be here.</h1>
                         	<img src="images/software.png">
                         </div>	

                         <div class="col-sm-8">

                         	
                            
                            
                             <form class="md-form" method="post" enctype="multipart/form-data">
 <h1> PUT THE NAME OF SOME OF YOUR HOBBIES:-</h1>

  <div class="form-group">
       <label for="skill">HOBBY 1:</label>
       <input type="text" class="form-control" id="hobby1" name="txthobby1">
       <span class="error"> <?php echo $hb1;?></span>
  </div>
 
  <div class="form-group">
       <label for="skill">HOBBY 2:</label>
       <input type="text" class="form-control" id="hobby2" name="txthobby2">
       <span class="error"> <?php echo $hb1;?></span>
  </div>

  <div class="form-group">
       <label for="skill">HOBBY 3:</label>
       <input type="text" class="form-control" id="hobby3" name="txthobby3">
       <span class="error"> <?php echo $hb1;?></span>
  </div>


  <div class="form-group">
       <label for="skill">HOBBY 4:</label>
       <input type="text" class="form-control" id="hobby4" name="txthobby4">
       <span class="error"> <?php echo $hb1;?></span>
  </div>

 
 
  <div class="row">
        <div class="form-group col-sm-6">
             <button type="button" class="btn btn-primary btn-block" onClick="location.href='skills.php'">BACK</button>
        </div>

         <div class="form-group col-sm-6">
             <button type="submit" class="btn btn-primary btn-block" name="submit">SAVE AND NEXT</button> 	
        </div>                            
       </div>
       <div class="row"> 
         <div class="col-sm-12">
            <button type="button" class="btn btn-primary btn-block" onClick="location.href='software.php'">SKIP</button>
         </div>
       </div>

</form>
</body>
</html>
