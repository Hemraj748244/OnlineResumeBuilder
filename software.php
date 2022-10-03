<?php 
session_start();
$url='backgroundd.jpg';
 ?>
<?php 
$err1=$err2=$err3=$err4=$err5="";
if($_SERVER['REQUEST_METHOD']=='POST')
{
  if(empty($_POST['txtsoft1']))
  {
    $err1="**required";
  }
  if(empty($_POST['txtsoft2']))
  {
    $err2="**required";
  }
  if(empty($_POST['txtsoft3']))
  {
    $err3="**required";
  }
  if(empty($_POST['txtsoft4']))
  {
    $err4="**required";
  }
}
if(!empty($_POST['txtsoft1']) and !empty($_POST['txtsoft2']) and !empty($_POST['txtsoft3']) and !empty($_POST['txtsoft4']))
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
$uiddd=$_SESSION['uid'];


if(isset($_POST['submit']))
{
  $user=$uiddd;
  $s1 = $_POST['txtsoft1'];
  $s2 = $_POST['txtsoft2'];
  $s3 = $_POST['txtsoft3'];
  $s4 = $_POST['txtsoft4'];
 

$qry="insert into software values('$user','$s1','$s2','$s3','$s4')";
$data=mysqli_query($con,$qry);
if($data)
{
 header('location:projects.php');
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
<div class="circle active"> <!--no added class for future steps-->
<span class="label">6</span>
<span class="title">Softwares</span>
<span class="bar"></span>
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
                         	<h1>Software you know will be here.</h1>
                         	<img src="images/software.png">
                         </div>	

                         <div class="col-sm-8">

                         	
                            
                            
                             <form class="md-form" method="post" enctype="multipart/form-data">
 <h1> PUT THE NAME OF THE SOFTWARES YOU KNOW:-</h1>

  <div class="form-group">
       <label for="skill">SOFTWARE 1:</label>
       <input type="text" class="form-control" id="soft1" name="txtsoft1">
       <span class="error"> <?php echo $err1;?></span>
  </div>
 
  <div class="form-group">
       <label for="skill">SOFTWARE 2:</label>
       <input type="text" class="form-control" id="soft2" name="txtsoft2">
       <span class="error"> <?php echo $err2;?></span>
  </div>

  <div class="form-group">
       <label for="skill">SOFTWARE 3:</label>
       <input type="text" class="form-control" id="soft3" name="txtsoft3">
       <span class="error"> <?php echo $err3;?></span>
  </div>


  <div class="form-group">
       <label for="skill">SOFTWARE 4:</label>
       <input type="text" class="form-control" id="soft4" name="txtsoft4">
       <span class="error"> <?php echo $err4;?></span>
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
          <button type="button" class="btn btn-primary btn-block" onClick="location.href='projects.php'">SKIP</button>
         </div>
       </div>

</form>
</body>
</html>
