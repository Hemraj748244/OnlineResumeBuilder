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
	$qry="select * from education where uid='$uid' ";
	$reseducation=mysqli_query($con,$qry);
   ?>
   <div class="container">
   	
   
   <div class="col-sm-12" style="border: 2px solid white; margin-top: 10px;">
   	
   <center>
   	<h3 style="color: white; border: 2px solid white;"><b>Update Qualificaion</b></h3>
   <table class="table">
    <thead>
         <tr style="color: white;">
        <th scope="col">DEGREE</th>
  <th scope="col">INSTITUTE</th>
  <th scope="col">UNIVERCITY</th>
  <th scope="col">SPECILIZATION</th>
  <th scope="col">FROM</th>
  <th scope="col">TO</th>
  <th scope="col">CGPA/PERCENTAGE</th>
        </tr>
    </thead>
    <tbody>
         <form  class="md-form"  method="post" enctype="multipart/form-data" >
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
       <label for="update">ENTER THE DEGREE TO UPDATE:</label>
     
      
  </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
       
       <input type="text"  class="form-control" id="degree" name="txtdegreetoupdate">
      
  </div>
  </div>
</div>

   <?php
	while($row=mysqli_fetch_array($reseducation))
  {
  $deg=$row['degree'];
  $institute=$row['institute'];
  $university=$row['university'];
  $specilization=$row['specialization'];
  $from=$row['startd'];
  $to=$row['endd'];
  $percent=$row['percentage'];
     ?>
   
     <tr>
    
<td><div class="form-group">
       
       <input type="text" value="<?php echo $deg; ?>" class="form-control" id="degree" name="txtdegree">
      
  </div></td>
  <td><div class="form-group">
       
       <input type="text" value="<?php echo $institute; ?>" class="form-control" id="institution" name="txtinst">
       
  </div></td>
  <td><div class="form-group">
      
       <input type="text" value="<?php echo $university; ?>" class="form-control" id="univercity" name="txtuniver">
      
  </div></td>
 <td>
 <div class="form-group">
       
       <input type="text" value="<?php echo $specilization; ?>" class="form-control" id="specialization" name="txtspec">
      
  </div>	
 </td> 
  <td>
  	<div class="form-group">
       
       <input type="date" value="<?php echo $from; ?>" class="form-control" id="fromdate" name="txtfrom" value="2019-01-01">
       
  </div>
  </td>
    <td>
    <div class="form-group">
       
       <input type="date" class="form-control" value="<?php echo $to; ?>" id="todate" name="txttodate" value="2019-01-01">
       
  </div>	
    </td>
    <td>
  <div class="form-group">
       
       <input type="text" class="form-control" value="<?php echo $percent; ?>" id="percent" name="txtpercent">
     
  </div>  	
    </td>
   
  
  
</tr>


     <?php
  }
   ?>

</tbody>
</table>
  <div class="form-group">
   <button type="submit" class="btn btn-primary btn-block" name="submit">UPDATE</button> 
 </div>
   </form>
</center>
</div>
</div>
   <?php

}	

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Update Qualification</title>
 	<style type="text/css">
		body
		{
			background-image: url('<?php echo $url; ?>')
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
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

if(isset($_POST['submit']))
{
  $con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");

  $deg=$_POST['txtdegreetoupdate'];
	 $degree=$_POST['txtdegree'];
     $inst=$_POST['txtinst'];
     $univ=$_POST['txtuniver'];
     $spec=$_POST['txtspec'];
     $sdate=$_POST['txtfrom'];
     $edate=$_POST['txttodate'];
     $percent=$_POST['txtpercent'];
$qry1="SELECT * FROM education WHERE degree=$deg";
$res=mysqli_query($con,$qry1);
$row=mysqli_fetch_assoc($res);
if($row<1)
{
    ?>
  <script type="text/javascript">
    window.alert("Please enter the same Degree as displayed below");
  </script>
  <?php
}
else
{
     $qry = "UPDATE education SET degree = '$degree' ,  institute='$inst' , university = '$univ' , specialization= '$spec', startd= '$sdate' , endd= '$edate' ,   percentage= '$percent' WHERE degree='$deg'";
      $data=mysqli_query($con,$qry);
        ?>
  <script type="text/javascript">
    window.alert("Data Updated");
  </script>
  <?php
}


   
      
}



  ?>