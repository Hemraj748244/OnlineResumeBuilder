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
  $qry="select * from hobby where uid='$uid' ";
  $resskills=mysqli_query($con,$qry);
  
  while ($row=mysqli_fetch_array($resskills))
   {
              $h1=$row['hob1']; 
        $h2=$row['hob2']; 
        $h3=$row['hob3']; 
        $h4=$row['hob4']; 

              ?>
              <div class="container" align="center" style="margin-top: 15px;">
                <div class="col-sm-12" align="center" style="border: 2px solid white;">
                  <h3 style="color: white; border:2px solid white;"><b>Update Skills Data</b></h3>
                    <form class="md-form" method="post" enctype="multipart/form-data">


  <div class="form-group">
       <label for="skill">HOBBY 1:</label>
       <input type="text" value="<?php  echo $h1; ?>" class="form-control" id="hobby1" name="txthobby1">
  </div>
 
  <div class="form-group">
       <label for="skill">HOBBY 2:</label>
       <input type="text" value="<?php  echo $h2; ?>" class="form-control" id="hobby2" name="txthobby2">
  </div>

  <div class="form-group">
       <label for="skill">HOBBY 3:</label>
       <input type="text" class="form-control" value="<?php  echo $h3; ?>" id="hobby3" name="txthobby3">
  </div>


  <div class="form-group">
       <label for="skill">HOBBY 4:</label>
       <input type="text" class="form-control" id="hobby4" value="<?php  echo $h4; ?>" name="txthobby4">
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
                       $hobby1 = $_POST['txthobby1'];
  $hobby2 = $_POST['txthobby2'];
  $hobby3 = $_POST['txthobby3'];
  $hobby4 = $_POST['txthobby4'];

               $qry = "UPDATE hobby SET hob1 = '$hobby1' ,  hob2='$hobby2' , hob3 = '$hobby3' , hob4= '$hobby4' WHERE uid='$uid'";
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