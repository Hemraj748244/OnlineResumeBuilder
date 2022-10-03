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
	$qry="select * from projects where uid='$uid' ";
	$reseducation=mysqli_query($con,$qry);
   ?>
   <div class="container">
   	
   
   <div class="col-sm-12" style="border: 2px solid white; margin-top: 10px;">
   	
   <center>
   	<h3 style="color: white; border: 2px solid white;"><b>Update Qualificaion</b></h3>
   <table class="table" style="color: white;">
    <thead>
         <tr>
        <th scope="col">PROJECT TITLE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">LANGUAGE</th>
        <th scope="col">DURATION</th>
        </tr>
    </thead>
    <tbody>
         <form  class="md-form"  method="post" enctype="multipart/form-data" >

<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
       <label for="update">ENTER THE PROJECT TITLE TO UPDATE:</label>
     
      
  </div>
  </div>
  <div class="col-sm-6">
    <div class="form-group">
       
       <input type="text"  class="form-control" id="degree" name="titletoupdate">
      
  </div>
  </div>
</div>

   <?php
	while($row=mysqli_fetch_array($reseducation))
  {
   $prjtitle=$row['title'];
  $prjabout=$row['about'];
  $language=$row['lang'];
  $time=$row['duration'];
     ?>
 
     <tr>
    
<td><div class="form-group">
       
        <input type="text"  value="<?php echo $prjtitle; ?>" class="form-control" id="title" name="txtprjtitle">
      
  </div></td>
  <td><div class="form-group">
       
        <input type="text"  value="<?php echo $prjabout; ?>" class="form-control" id="about" name="txtabout">
       
  </div></td>
  <td><div class="form-group">
      
        <input type="text"  value="<?php echo $language; ?>" class="form-control" id="language" name="txtlang">
      
  </div></td>
 <td>
 <div class="form-group">
       
          <input type="text"  value="<?php echo $time; ?>" class="form-control" id="time" name="txttime">
      
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
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");

if(isset($_POST['submit']))
{
   $titletoupdate=$_POST['titletoupdate'];
  $prjtitle=$_POST['txtprjtitle'];
  $aboutprj=$_POST['txtabout'];
  $lang=$_POST['txtlang'];
  $timetaken=$_POST['txttime'];
  $qry1="SELECT * FROM projects WHERE title='$titletoupdate'";

$data=mysqli_query($con,$qry1);
    $row=mysqli_fetch_assoc($data);
   
if($row<1)
{
  ?>
  <script type="text/javascript">
    window.alert("Please enter the same title as displayed below");
  </script>
  <?php
}
else
{
  $qry = "UPDATE projects SET title = '$prjtitle' ,  about='$aboutprj' , lang = '$lang' , duration= '$timetaken' WHERE title = '$titletoupdate' ";
  $result=mysqli_query($con,$qry) or die( mysqli_error($con));
  ?>
  <script type="text/javascript">
    window.alert("Data Updated");
  </script>
  <?php
}

     
    }
      




  ?>