
<!DOCTYPE html>
<html>
<head>
	<title>multiple records access</title>
</head>
<body>
</body>
</html>

<?php 
session_start();
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
$user='17';
if($con)
{
    $education="SELECT * FROM education WHERE uid='$user'";
	$experience="SELECT * FROM experience WHERE uid='$user'";
	$personal="SELECT * FROM personal WHERE uid='$user'";
	$user="SELECT * FROM userdata WHERE userid='$user'";
	$projects="SELECT * FROM projects WHERE uid='$user'";
	$skills="SELECT * FROM skills WHERE uid='$user'";
	$respersonal=mysqli_query($con,$personal);
	$resuser=mysqli_query($con,$user);
	$resexperience=mysqli_query($con,$experience);
	$reseducation=mysqli_query($con,$education);
	$resprojects=mysqli_query($con,$projects);
	$resskills=mysqli_query($con,$skills);
     
  

	while ($row=mysqli_fetch_assoc($resuser)) 
	{
		$email=$row['email'];
	}
	while ($row=mysqli_fetch_assoc($respersonal)) {
	$fname=$row['fname'];
	$mname=$row['mname'];
	$lname=$row['lname'];
	$dob=$row['dob'];
	$mobile=$row['mobile'];
	$address=$row['address'];
	$carr=$row['carrierobj'];
	echo "<h3>".$fname."<h3>";
	}


	while($row=mysqli_fetch_assoc($reseducation))
	{
		$deg=$row['degree'];
		$institute=$row['institute'];
		$university=$row['university'];
		$specilization=$row['specialization'];
		$from=$row['startd'];
		$to=$row['endd'];
		$percent=$row['percentage'];
	}
    
    while($row=mysqli_fetch_assoc($resexperience)) 
    {
    	$job=$row['jobtitle'];
    	$employer=$row['employer'];
    	$city=$row['city'];
    	$state=$row['state'];
    	$startd=$row['startdate'];
    	$endd=$row['enddate'];
    	
    }

    while($row=mysqli_fetch_assoc($resprojects))
    {
    	$prjtitle=$row['title'];
    	$prjabout=$row['about'];
    	$language=$row['lang'];
    	$time=$row['duration'];
    }

    while($row=mysqli_fetch_assoc($resskills))
     { 
        $skill1=$row['skill1']; 
        $skill2=$row['skill2']; 
        $skill3=$row['skill3']; 
        $skill4=$row['skill4']; 
        $skill5=$row['skill5']; 
     }

 }

 ?>
