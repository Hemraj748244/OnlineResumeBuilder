<?php 
session_start();
$url='backgroundd.jpg';
 ?>

 <?php 
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
$uid=$_SESSION['uid'];
if($con)
{
	$qry="select * from skills where uid='$uid' ";
	$resskills=mysqli_query($con,$qry);
	
	while ($row=mysqli_fetch_array($resskills))
	 {
							  $skill1=$row['skill1']; 
        $skill2=$row['skill2']; 
        $skill3=$row['skill3']; 
        $skill4=$row['skill4']; 
        $skill5=$row['skill5']; 

							?>
							<div class="container" align="center" style="margin-top: 15px;">
								<div class="col-sm-12" align="center" style="border: 2px solid white;">
									<h3 style="color: white; border:2px solid white;"><b>Update Skills Data</b></h3>
										 <form class="md-form" method="post" enctype="multipart/form-data">


  <div class="form-group">
       <label for="skill">SKILL 1:</label>
       <input type="text" value="<?php echo $skill1; ?>" class="form-control" id="skill1" name="txtskill1">
  </div>
 
  <div class="form-group">
       <label for="skill">SKILL 2:</label>
       <input type="text" value="<?php echo $skill2; ?>" class="form-control" id="skill2" name="txtskill2">
  </div>

  <div class="form-group">
       <label for="skill">SKILL 3:</label>
       <input type="text" class="form-control" value="<?php echo $skill3; ?>" id="skill3" name="txtskill3">
  </div>


  <div class="form-group">
       <label for="skill">SKILL 4:</label>
       <input type="text" class="form-control" id="skill4" value="<?php echo $skill4; ?>" name="txtskill4">
  </div>

  <div class="form-group">
       <label for="skill">SKILL 5:</label>
       <input type="text" class="form-control" id="skill5" name="txtskill5" value="<?php echo $skill5; ?>">
  </div>
 
 <div class="form-group">
   <button type="submit" class="btn btn-primary btn-block" name="submit">UPDATE</button> 
 </div>

</form>
								</div>
							</div>
							<?php
						}
						
					}
    ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Update Personal Data</title>
  	<style type="text/css">
    body
    {
      background-image: url('<?php echo $url; ?>')
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<link rel="stylesheet" type="text/css" href="update.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
  </head>
  <body>
   <ul class="pager">
  <li><a href="updatedata.php">Previous</a></li>

</ul> 
  </body>
  </html>
<?php 
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
$uid=$_SESSION['uid'];
if(isset($_POST['submit']))
{
	                        $skill1 = $_POST['txtskill1'];
  $skill2 = $_POST['txtskill2'];
  $skill3 = $_POST['txtskill3'];
  $skill4 = $_POST['txtskill4'];
  $skill5 = $_POST['txtskill5'];

							 $qry = "UPDATE skills SET skill1 = '$skill1' ,  skill2='$skill2' , skill3 = '$skill3' , skill4= '$skill4', skill5= '$skill5' WHERE uid='$uid'";
							 $data=mysqli_query($con,$qry);
							 if($data)
							 {
							 	?>
							 	<script type="text/javascript">
							 	window.alert("Data Updated Successfully");
					
							 	</script>
							 	<?php
							 	
							 }

}

 ?>