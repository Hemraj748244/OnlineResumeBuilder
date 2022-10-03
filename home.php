<?php

$url = 'backgroundd.jpg';

?>






<!DOCTYPE html>
<html>
<head>
	<title>Online Resume Builder</title>
	<link rel="stylesheet" type="text/css" href="home.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style type="text/css">
	body
	{
		background-image: url('<?php echo $url; ?>');
		background-position: fixed;
	}
</style>
</head>
<body>
	 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      ONLINE RESUME BUILDER
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="#">Contact Us</a></li>
      <li><a href="#">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>Sign Up</a></li>
    <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
	


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/21.jpg" alt="Template 1" style="width:100%; height: 50%;">
      </div>

      <div class="item">
        <img src="images/22.jpg" alt="Template 2" style="width:100%; height: 50%;">
      </div>
    
      <div class="item">
        <img src="images/24.jpg" alt="Template 3" style="width:100%; height: 50%;">
      </div>

       <div class="item">
        <img src="images/25.jpg" alt="Template 4" style="width:100%; height: 50%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="landing-steps landing-section landing-section--alt">
  <div class="container">
    <div class="landing-section-header">
      <h2 class="landing-heading" style="text-decoration: underline;">
       <center>JUST FOLLOW THESE FOUR STEPS</center>
      </h2>
      <br>
    </div>

    <div class="row landing-steps__steps">
         <a href="/introduction">
            <div class="landing-steps__step col-md-3">
              <div class="landing-steps__step-icon"><img src="images/login.png" height="100px" width="100px" alt="Icon cv"></div>
          <h3 class="landing-steps__step-title">LOGIN OR <br> SIGNUP</h3>
          
        </div>
</a>
         <a href="">
         <div class="landing-steps__step col-md-3">
          <div class="landing-steps__step-icon"><img src="images/info.png" height="100px" width="100px" alt="Icon pen"></div>
          <h3 class="landing-steps__step-title">DESCIBE YOURSELF AS YOU ARE</h3>
          
        </div>
          </a>

          <a href="">
          <div class="landing-steps__step col-md-3">
          <div class="landing-steps__step-icon"><img src="images/temp.png" height="100px" width="100px"></div>
          <h3 class="landing-steps__step-title">SELECT<br> YOUR TEMPLATE</h3>
         
        </div>
          </a>
          
          <a href="">
          <div class="landing-steps__step col-md-3">
          <div class="landing-steps__step-icon"><img src="images/download.png" alt="Icon download2" height="100px" width="100px"></div>
          <h3 class="landing-steps__step-title">DOWNLOAD <br> YOUR RESUME</h3>
          
          </div>
          </a>    
</div>
  </div>
</section>
 	
</div>

</div>
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      ONLINE RESUME BUILDER
    </div>
    <ul  class="nav navbar-nav">
      <li class="item"><a href="#">Contact Us</a></li>
      <li class="item"><a href="#">About Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
   <br>
   <li id="item" style="color: white;">copyright © 2k19 </li>
   <br>	
   <li id="item" style="color: white;">Online Resume Builder</li>
   
    </ul>
  </div>
</nav>
</body>
</html>

