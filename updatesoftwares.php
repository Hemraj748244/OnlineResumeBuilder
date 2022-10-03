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
	$qry="select * from software where uid='$uid' ";
	$resskills=mysqli_query($con,$qry);
	
	while ($row=mysqli_fetch_array($resskills))
	 {
							  $s1=$row['soft1'];
  $s2=$row['soft2'];
  $s3=$row['soft3'];
  $s4=$row['soft4'];

							?>
							<div class="container" align="center" style="margin-top: 15px;">
								<div class="col-sm-12" align="center" style="border: 2px solid white;">
									<h3 style="color: white; border:2px solid white;"><b>Update Software Data</b></h3>
										 <form class="md-form" method="post" enctype="multipart/form-data">


  <div class="form-group">
       <label for="skill">SOFTWARE 1:</label>
       <input type="text" value="<?php echo $s1; ?>" class="form-control" id="soft1" name="txtsoft1">
  </div>
 
  <div class="form-group">
       <label for="skill">SOFTWARE 2:</label>
       <input type="text" value="<?php echo $s2; ?>" class="form-control" id="soft2" name="txtsoft2">
  </div>

  <div class="form-group">
       <label for="skill">SOFTWARE 3:</label>
       <input type="text" class="form-control" value="<?php echo $s3; ?>" id="soft3" name="txtsoft3">
  </div>


  <div class="form-group">
       <label for="skill">SOFTWARE 4:</label>
       <input type="text" class="form-control" id="soft4" value="<?php echo $s4; ?>" name="txtsoft4">
  </div>

 
 
  <div class="form-group">
    <button type="submit" name="submit" class="btn btn-primary btn-block">UPDATE</button>
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
	              $s1 = $_POST['txtsoft1'];
  $s2 = $_POST['txtsoft2'];
  $s3 = $_POST['txtsoft3'];
  $s4 = $_POST['txtsoft4'];

							 $qry = "UPDATE software SET soft1 = '$s1' ,  soft2='$s2', soft3 = '$s3' , soft4= '$s4' WHERE uid='$uid'";
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