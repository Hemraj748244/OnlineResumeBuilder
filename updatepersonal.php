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
	$qry="select * from personal where uid='$uid' ";
	$respersonal=mysqli_query($con,$qry);
	
	while ($row=mysqli_fetch_array($respersonal))
	 {
							$fname=$row['fname'];
							$mname=$row['mname'];
							$lname=$row['lname'];
							$dob=$row['dob'];
							$mobile=$row['mobile'];
							$address=$row['address'];
							$carr=$row['carrierobj'];
							?>
							<div class="container" align="center" style="margin-top: 15px;">
								<div class="col-sm-12" align="center" style="border: 2px solid white;">
									<h3 style="color: white; border:2px solid white;"><b>Update Personal Data</b></h3>
										<form class="md-form" method="post" enctype="multipart/form-data">
                            
                          

                            <div class="form-group">
                                <label for="FIRST NAME">FIRST NAME:</label>
                                <input type="text" class="form-control" id="firstname" name="txtfname" value="<?php echo $fname; ?>">
                            </div>
                            
                            <div class="form-group">
                                <label for="MIDDLE NAME">MIDDLE NAME:</label>
                                <input type="text" class="form-control" value="<?php echo $mname; ?>" id="midname" name="txtmname">
                            </div>
                            
                            <div class="form-group">
                                <label for="LAST NAME">LAST NAME:</label>
                                <input type="text" class="form-control" id="lastname" value="<?php echo $lname; ?>" name="txtlname">
                            </div>
                            
                            <div class="form-group">
                                <label for="DOB">DATE OF BIRTH:</label>
                                <input type="date" class="form-control" value="<?php echo $dob; ?>" id="dob" name="txtdob" value="2019-01-01">
                            </div>
                            
                            <div class="form-group">
                                <label for="MOBILE">MOBILE NUMBER:</label>
                                <input type="text" class="form-control" id="mobile" value="<?php echo $mobile; ?>" name="txtmobile">
                           </div>
                            
                            <div class="form-group">
                                <label for="ADDRESS">ADDRESS:</label>
                                <input type="text" class="form-control" id="address" value="<?php echo $address; ?>" name="txtaddress">
                            </div>
                            
                            <div class="form-group">
                                <label for="CAREER OBJECTIVE">CAREER OBJECTIVE:</label>
                                                         <textarea type="text" class="form-control" id="objective" name="txtobj" value="<?php echo $carr; ?>" rows="3"><?php echo $carr; ?></textarea>
                            </div>
                             <div class="row">
                           	<div class="form-group col-sm-12">
                            	<button type="submit" name="submit" class="btn btn-primary btn-block">UPDATE</button>
                            </div>

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
	                         $fname=$_POST['txtfname'];
              $mname=$_POST['txtmname'];
              $lname=$_POST['txtlname'];
              $dob=$_POST['txtdob'];
              $mobile=$_POST['txtmobile'];
              $address=$_POST['txtaddress'];
              $carr=$_POST['txtobj'];
							 $qry = "UPDATE personal SET fname = '$fname' ,  mname='$mname' , lname = '$lname' , dob= '$dob', mobile= '$mobile' , address= '$address' ,   carrierobj= '$carr' WHERE uid='$uid'";
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