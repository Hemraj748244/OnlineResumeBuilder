<?php 
  session_start();

  $con=mysqli_connect("localhost","root","");
  $db=mysqli_select_db($con,"resumedata");
   $user=$_SESSION['uid'];
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
  }

  }

  ?>



<!DOCTYPE html>
<html>
<head>
	<title>Template 4</title>
	<style type="text/css">
@page { size: auto;  margin: 0mm; }
		@media print
{

  .container-fluid
{
	padding: 15px;
	padding-top: 5px;
}



h3
{
	color: rgb(0, 38, 77);
	border-bottom: 2px rgb(0, 38, 77) solid;
	background-color: 
}
h4
{
	color: rgb(0, 38, 77);
	border-top: 2px rgb(0, 38, 77) solid; 
	border-bottom: 2px rgb(0, 38, 77) solid;
	padding-top: 5px;
	padding-bottom: 5px;
}
hr {
   height: 2px;
    color: rgb(0, 38, 77);
    background-color:rgb(0, 38, 77);
    border: none;
}
#no
{
  border-bottom: unset;
}	
ul
{
  page-break-before: avoid;
}
}
	</style>
	<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="temp4.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <script type="text/javascript">
    function printc()
    {
      var restore=document.body.innerHTML;
      var c=document.getElementById('printable').innerHTML;
      document.body.innerHTML=c;
      window.print();
    }
  </script>
</head>
<body >
<div class="wrapper">
	<div class="container-fluid" id="printable" style="border: 2px solid lightblue; margin-top: 10px; margin-bottom: 10px; ">
		<div class="row">
      <div class="col-sm-12">
            <center><h3 style="color: #003366;"><b><?php echo "$fname $mname $lname"; ?></b></h3></center>

      </div>
			<div class="col-sm-4">
				<b>Phone :</b><p><?php echo "$mobile"; ?></p>
				<b>E-mail :</b><p><?php echo "$email"; ?></p>
			</div>
			<div class="col-sm-8">
				<b>DOB :</b><p><?php echo "$dob"; ?></p>
				<b>Address :</b><p><?php echo "$address"; ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h3 id="no">Career Objective</h3>
				<?php echo "<p>".$carr."</p>"; ?>
			</div>
		</div>
		<div class="row">
			
<?php 
$flag=0;
  while($row=mysqli_fetch_assoc($reseducation))
  {
  $deg=$row['degree'];
  $institute=$row['institute'];
  $university=$row['university'];
  $specilization=$row['specialization'];
  $from=$row['startd'];
  $to=$row['endd'];
  $percent=$row['percentage'];

   if(!empty($deg) and !empty($institute) and !empty($university) and !empty($specilization))
                            {

                              if($flag==0)
                              {
                                ?>
                                 <div class="col-sm-12">
                                     <h4><b>EDUCATION</b></h4>
                                 </div>
                                <?php
                                $flag+=1;

                              } 
           ?>
			<div class="col-sm-4">
				<p>
				<?php echo $from; ?>	
				</p>
				<p>
				<?php  echo $to; ?>	
				</p>
			</div>
			<div class="col-sm-8">
				<b><?php echo $deg;  ?></b>
				<p><?php echo $institute; ?></p>
				<b><?php echo $university;  ?></b>
				<br>
				<strong> <?php echo $percent; ?></strong>
			</div>
			<?php
		}
			  }
  ?>
		</div>
		<div class="row">
			 
			 <?php
  while($row=mysqli_fetch_assoc($resexperience)) 
  {
  $job=$row['jobtitle'];
  $employer=$row['employer'];
  $city=$row['city'];
  $state=$row['state'];
  $startd=$row['startdate'];
  $endd=$row['enddate'];
     if(!empty($job) and !empty($employer) and !empty($city))
                            {
            ?>
           <div class="col-sm-12">
              <h4><b>EXPERIENCE</b></h4> 
           </div>
			<div class="col-sm-4">
				<b><?php echo $job; ?></b>
			</div>
			<div class="col-sm-8">
				
				<p><?php echo $employer; ?></p>
				<p><?php echo $city; ?></p>
				<p><?php echo $state; ?></p>
				<b>From : </b><p><?php echo $startd; ?></p><b>To :</b><p><?php echo $endd; ?></p>
			</div>
             <?php
         }
		}
			?>
		</div>
		<div class="row">
		
<?php
			
  $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
    $projects="SELECT * FROM projects WHERE uid='$user'";
    $resprojects=mysqli_query($con,$projects);
  if($resprojects)
  {
  	$flag=0;

  while($row=mysqli_fetch_assoc($resprojects))
  {
  $prjtitle=$row['title'];
  $prjabout=$row['about'];
  $language=$row['lang'];
  $time=$row['duration'];
    if(!empty($prjtitle) and !empty($prjabout) and !empty($language) and !empty($time))
                            {

                              if($flag==0)
                              {
                                ?>
                                    <div class="col-sm-12">
                                      <h4><b>PROJECTS</b></h4> 
                                    </div>
                                <?php
                                $flag+=1;

                              }     

            ?>
			<div class="col-sm-4">
				<b><?php echo $prjtitle; ?></b>
			</div>
			<div class="col-sm-8">
				<p><?php echo $prjabout; ?></p>
				<b><?php echo $language; ?></b>
				<p><?php echo $time; ?></p>
			</div>
			<?php
			  }
			}
			}
			
  ?>
		</div>
		<div class="row">
			
			 <?php 
          $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
 $skills="SELECT * FROM skills WHERE uid='$user'";
 $resskills=mysqli_query($con,$skills);
        
        while($row=mysqli_fetch_assoc($resskills))
     { 
        $skill1=$row['skill1']; 
        $skill2=$row['skill2']; 
        $skill3=$row['skill3']; 
        $skill4=$row['skill4']; 
        $skill5=$row['skill5'];
        if(!empty($skill1) and !empty($skill2) and !empty($skill3) and !empty($skill4) and !empty($skill5) )
                          {
 

?>
<div class="col-sm-12"> 
   <h4><b>SKILLS</b></h4> 

</div>
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-8">
				<ul style="padding: 0px;">
					<li><?php echo $skill1; ?></li>
					<li><?php echo $skill2; ?></li>
					<li><?php echo $skill3; ?></li>
					<li><?php echo $skill4; ?></li>
					<li><?php echo $skill5; ?></li>
				</ul>
			
			<?php
		}
		else if(empty($skill1))
                  {
                    ?>
                     <h4><b>SKILLS</b></h4> 
                     <ul>
                       
                        <li><?php echo $skill2; ?></li>
                        <li><?php echo $skill3; ?></li>
                        <li><?php echo $skill4; ?></li>
                        <li><?php echo $skill5; ?></li>
                  </ul>
                    <?php
                  }
                  else if(empty($skill2))
                  {
                    ?>
                    <h4><b>SKILLS</b></h4> 
                     <ul>
                       
                        <li><?php echo $skill1; ?></li>
                        <li><?php echo $skill3; ?></li>
                        <li><?php echo $skill4; ?></li>
                        <li><?php echo $skill5; ?></li>
                  </ul>
                    <?php 
                  }
                  else if(empty($skill3))
                  {
                                        ?>
                                         <h4><b>SKILLS</b></h4> 
                     <ul>
                       
                        <li><?php echo $skill1; ?></li>
                        <li><?php echo $skill2; ?></li>
                        <li><?php echo $skill4; ?></li>
                        <li><?php echo $skill5; ?></li>
                  </ul>
                    <?php 
                  }
                  else if(empty($skill4))
                  {
                                        ?>
                                         <h4><b>SKILLS</b></h4> 
                     <ul>
                       
                        <li><?php echo $skill1; ?></li>
                        <li><?php echo $skill3; ?></li>
                        <li><?php echo $skill2; ?></li>
                        <li><?php echo $skill5; ?></li>
                  </ul>
                    <?php 
                  }
                  else if(empty($skill5))
                  {
                                        ?>
                                         <h4><b>SKILLS</b></h4> 
                     <ul>
                       
                        <li><?php echo $skill1; ?></li>
                        <li><?php echo $skill3; ?></li>
                        <li><?php echo $skill4; ?></li>
                        <li><?php echo $skill2; ?></li>
                  </ul>
                    <?php 
                  }
		}
		?>
		</div>
		</div>
			<div class="row">
			 
			<?php
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
     $user=$_SESSION['uid'];
    $projects="SELECT * FROM software WHERE uid='$user'";
    $ressoft=mysqli_query($con,$projects);
  if($ressoft)
  {
  
  while($row=mysqli_fetch_assoc($ressoft))
  {
  $s1=$row['soft1'];
  $s2=$row['soft2'];
  $s3=$row['soft3'];
  $s4=$row['soft4'];
  	 if(!empty($s1) and !empty($s2) and !empty($s3) and !empty($s4))
                {
  ?>
 <div class="col-sm-12"> 
    <h4><b>SOFTWARES</b></h4>
 </div> 
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-8">
				<ul style="padding: 0px;">
					<li><?php echo $s1; ?></li>
					<li><?php echo $s2; ?></li>
					<li><?php echo $s3; ?></li>
					<li><?php echo $s4; ?></li>
					
				</ul>
			
			<?php
		}
		else if(empty($s1))
                  {
                    ?>
<div class="col-sm-12">
                       <h4><b>SOFTWARES</b></h4> 
</div>
                          <ul style="padding: 0px;">
                        
                        <li><?php echo $s2; ?></li>
                        <li><?php echo $s3; ?></li>
                        <li><?php echo $s4; ?></li>
                        
                      </ul>

                    <?php
                  }
                   else if(empty($s2))
                  {
                    ?>
                  <h4><b>SOFTWARES</b></h4> 
                         <ul style="padding: 0px;">
                        <li><?php echo $s1; ?></li>
                        <li><?php echo $s3; ?></li>
                        <li><?php echo $s4; ?></li>
                        
                      </ul>

                    <?php
                  }
                   else if(empty($s3))
                  {
                    ?>
                <h4><b>SOFTWARES</b></h4> 
                          <ul style="padding: 0px;">
                        
                        <li><?php echo $s2; ?></li>
                        <li><?php echo $s1; ?></li>
                        <li><?php echo $s4; ?></li>
                        
                      </ul>

                    <?php
                  }
                   else if(empty($s4))
                  {
                    ?>
                 <h4><b>SOFTWARES</b></h4> 
                        <ul style="padding: 0px;">
                        
                        <li><?php echo $s2; ?></li>
                        <li><?php echo $s3; ?></li>
                        <li><?php echo $s1; ?></li>
                        
                      </ul>

                    <?php
                  }
		}
	}
			?>
			</div>
		</div>
		
			<div class="row">
		 
			 <?php 
          $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
 $hob="SELECT * FROM hobby WHERE uid='$user'";
 $reshobby=mysqli_query($con,$hob);
    
        while($row=mysqli_fetch_assoc($reshobby))
     { 
        $h1=$row['hob1']; 
        $h2=$row['hob2']; 
        $h3=$row['hob3']; 
        $h4=$row['hob4']; 
         if(!empty($h1) and !empty($h2) and !empty($h3) and !empty($h4))
                         {
         ?>
      <div class="col-sm-12">
           <h4><b>HOBBIES</b></h4> 
      </div>
			<div class="col-sm-4">
				
			</div>
			<div class="col-sm-8">
				<ul style="padding: 0px;">
					<li><?php echo $h1; ?></li>
					<li><?php echo $h2; ?></li>
					<li><?php echo $h3; ?></li>
					<li><?php echo $h4; ?></li>
				
				</ul>
			
			<?php
		}
		 else if(empty($h1))
                         {
                           ?>
    
                      <h4><b>HOBBIES</b></h4> 
                    <ul >
                    
                        <li><?php echo $h2; ?></li>
                        <li><?php echo $h3; ?></li>
                        <li><?php echo $h4; ?></li>
                      
                      </ul>
                 
                      <?php
                         }
                         else if(empty($h2))
                         {
                           ?>
    
                  <h4><b>HOBBIES</b></h4> 
                     <ul style="padding: 0px;">
                    
                        <li><?php echo $h1; ?></li>
                        <li><?php echo $h3; ?></li>
                        <li><?php echo $h4; ?></li>
                      
                      </ul>
                 
                      <?php
                         }
                         else if(empty($h3))
                         {
                           ?>
    
                <h4><b>HOBBIES</b></h4> 
                    <ul style="padding: 0px;">
                    
                        <li><?php echo $h2; ?></li>
                        <li><?php echo $h1; ?></li>
                        <li><?php echo $h4; ?></li>
                      
                      </ul>
                 
                      <?php
                         }
                         else if(empty($h4))
                         {
                           ?>
    
                     <h4><b>HOBBIES</b></h4> 
                    <ul style="padding: 0px;">
                    
                        <li><?php echo $h2; ?></li>
                        <li><?php echo $h3; ?></li>
                        <li><?php echo $h1; ?></li>
                      
                      </ul>
                 
                      <?php
                         }

            }
			?>

		</div>
	</div>
	</div>

	<div class="container-fluid" style="margin-top: 10px;">

  <div class="panel-default">
   
    <div class="panel-body">
      <form method="post" name="printr" action="#">
       <div class="row">
          <div class="col-sm-6">
    
    <button  id="printdoc" onclick="printc()" name="print" class="btn btn-primary btn-block">Print</button>
       </div>
  
  
 
  <div class="col-sm-6">
 
    <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
 
  </div>
  </div>
      </form>
    </div>
  </div>

</div>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>