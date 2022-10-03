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
	$qry="select * from experience where uid='$uid' ";
	$resexperience=mysqli_query($con,$qry);
	
	while ($row=mysqli_fetch_array($resexperience))
	 {
					  $job=$row['jobtitle'];
  $employer=$row['employer'];
  $city=$row['city'];
  $state=$row['state'];
  $startd=$row['startdate'];
  $endd=$row['enddate'];
							?>
							<div class="container" align="center" style="margin-top: 15px;">
								<div class="col-sm-12" align="center" style="border: 2px solid white;">
									<h3 style="color: white; border:2px solid white;"><b>Update Experience Data</b></h3>
										<form  class="md-form" method="post" enctype="multipart/form-data">
            
                  <div class="form-group">
                            <label for="job title">JOB TITLE:</label>
                            <input type="text" value="<?php echo $job; ?>" class="form-control" id="jobtitle" name="txtjobtitle">
                  </div>
                  <div class="form-group">
                            <label for="employer">EMPLOYER:</label>
                            <input type="text" class="form-control" value="<?php echo $employer; ?>" id="employer" name="txtemployer">
                  </div>
                  <div class="form-group">
                            <label for="city">CITY:</label>
                            <input type="text" value="<?php echo $city; ?>" class="form-control" id="city" name="txtcity">
                  </div>
                  <div class="form-group">
                            <label for="state">STATE:</label>
                            <input type="text" value="<?php echo $state; ?>" class="form-control" id="state" name="txtstate">
                  </div>
                  <div class="form-group">
                            <label for="startdate">START DATE:</label>
                            <input type="date" value="2019-01-01" value="<?php echo $startd; ?>" class="form-control" id="startdate" name="txtstartdate">
                  </div>
                  <div class="form-group">
                            <label for="enddate">END DATE:</label>
                            <input type="date" value="2019-01-01" value="<?php echo $endd; ?>" class="form-control" id="enddate" name="txtenddate">
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
	                        $jobtitle=$_POST['txtjobtitle'];
   $employer=$_POST['txtemployer'];
   $city=$_POST['txtcity'];
   $state=$_POST['txtstate'];
   $startdate=$_POST['txtstartdate'];
   $enddate=$_POST['txtenddate'];
							 $qry = "UPDATE experience SET jobtitle = '$jobtitle' ,  employer='$employer' , city = '$city' , state= '$state', startdate= '$startdate' , enddate= '$enddate' WHERE uid='$uid'";
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