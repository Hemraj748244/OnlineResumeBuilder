<?php 
$sci='';
if(isset($_POST['submit']))
{
	$url=$_POST["url1"];
	$scdata=file_get_contents("https://www.googleapis.com/pagespeedonline/v2/runpagespeed?url=$url&screenshot=true");
	$scr=json_decode($scdata,true);
	$ss=$scr['screenshot']['data'];
	$ss=str_replace(array('_','-'), array('/','+'), $ss);
	$sci="<img src=\"data:image/jpeg;base64,".$ss."\" class='img-responsive img-thumbnail'/>";

}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form method="post">
 	<input type="url" name="url1" required>
 	<input type="submit" name="submit">

 </form>
 <?php 
echo $sci;
  ?>
 </body>
 </html>