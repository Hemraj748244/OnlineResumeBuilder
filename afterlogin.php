<?php 
session_start();
$url='backgroundd.jpg';
$user='user.png'
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Page</title>
	<style type="text/css">
		body
		{
			/*background-image: url('<?php echo $url; ?>')*/
            background-color: gray;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>
<body>
 <nav class="navbar navbar-inverse">
    <div class="container-fluid">
    <div class="navbar-header">
      ONLINE RESUME BUILDER
    </div>
     <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
     </ul>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" name="logout"><span class="glyphicon glyphicon-log-out"></span>Log Out</a></li>
     
     </ul>
      </div>
    </nav>
    <div class="wrapper">
    	
    		<div class="well" >
    		<center><div>
    			<img src="user123.png" height="150px" width="150px">
    		</div></center> 
    			<center><?php echo "<h2>"."Welcome"."<br>".$_SESSION['uname']."</h2>"; ?></center>
    	<br>
    	<br>
    		<div class="row">
    			<div class="col-sm-4">
    					<a href="displaydata.php">
    						<center><img src="display.png" class="img-circle" height="200px" width="200px">
    				</center>
                    <center><h3>DISPLAY MY DATA</h3></center>	
    					</a>
    			</div>
    			<div class="col-sm-4">
    				<a href="updatedata.php">
    					<center>
    					<img src="update.png" class="img-circle" height="200px" width="200px">
    					<center><h3>UPDATE PROFILE</h3></center>
    				</center>

    				</a>
    			</div>
    			<div class="col-sm-4">
    			<a href="selecttemplate.php">
    				<center>
    						<img src="showtemp.png" class="img-circle" height="200px" width="200px">

    				</center>
    				<center><h3>SHOW TEMPLATES</h3></center>
    			</a>
    			</div>
    		</div>
    	</div>
    	
    </div>
</body>
</html>