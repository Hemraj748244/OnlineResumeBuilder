<?php 
session_start();
$url='backgroundd.jpg';
$temp1='temp1.png';
$temp2='temp2.png';
$temp3='temp3.png';
$temp4='temp4.png';
$temp5='temp5.png';
$temp6='temp6.png';
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>select template</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<style type="text/css">

        body
        {
        background-image: url('<?php echo $url; ?>');

        }
        .img-thumbnail
        {
            height: 400px;
            width: 300px;
            border:2px solid rgb(0, 64, 128);
            transition: transform .2s;
        }
        .img-thumbnail:hover
        {
            transform: scale(1.5);
        }

</style>
</head>
<body>
    
<div class="container">
    <div class="well">
        <center><h2><b>SELECT YOUR TEMPLATE</b></h2></center>
    </div>
    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-4">
            <a href="template1.php">
              <img  src="<?php echo $temp1; ?>" class="img-thumbnail">
            </a>
        </div>
        <div class="col-sm-4">
            <a href="template2.php">
                <img  src="<?php echo $temp2; ?>" class="img-thumbnail">
            </a>
        </div>
        <div class="col-sm-4">
            <a href="template4.php">
                <img  src="<?php echo $temp4; ?>" class="img-thumbnail">
            </a>
        </div>
    </div>
    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-4">
            <a href="template3.php">
              <img  src="<?php echo $temp3; ?>" class="img-thumbnail">
            </a>
        </div> 
          <div class="col-sm-4">
            <a href="temp5.php">
                <img  src="<?php echo $temp5; ?>" class="img-thumbnail">
            </a>
        </div>
          <div class="col-sm-4">
            <a href="template6.php">
                <img  src="<?php echo $temp6; ?>" class="img-thumbnail">
            </a>
        </div>
    </div>
</div>
</body>
</html>