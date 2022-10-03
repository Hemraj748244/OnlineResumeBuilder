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
	<title>Template 5</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./csss/all.css">
		 <meta name="viewport" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" type="text/css" href="temp5.css">
     <script type="text/javascript">
    function printc()
    {
      var restore=document.body.inerHTML;
      var c=document.getElementById('printable').innerHTML;
      document.body.innerHTML=c;
      window.print();
    }
  </script>
</head>
<body>
<div class="wrapper">
	<div class="container" id="printable">
	
			<div class="row">
        <div class="col-sm-12">
          <h3><?php echo "$fname $mname $lname"; ?></h3>
        </div>
      </div>
			<div class="row">
        <div class="col-sm-6">
        
        <p><b>Phone : </b><?php echo "$mobile"; ?></p>
        <p><b>E-mail : </b><?php echo "$email"; ?></p>

      </div>
      <div class="col-sm-6">
        <p><b>DOB : </b><?php echo "$dob"; ?></p>
        <p><b>Address : </b><?php echo "$address"; ?></p>
      </div>
      </div>
			


		<div class="row">
				<?php echo "<p>".$carr."</p>"; ?>
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
  if(!empty($job) and !empty($employer) and !empty($city) and !empty($city) and !empty($state))
  {

                     ?>

        	<div class="col-sm-12">
            <h4><i class="fas fa-briefcase"></i> Experience </h4>
          </div>
        	<div class="col-sm-3">
        		<p><?php echo $startd; ?><b> To </b><?php echo $endd; ?></p>
        	</div>
        	<div class="col-sm-9">
        		<b><?php echo $job; ?></b>
        		<p><?php echo $employer; ?></p>
        		<p><?php echo $city; ?></p>
        		<p><?php echo $state; ?></p>

        	</div>
        	 <?php
		              } 
  
		}
			?>
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
                                      <h4> <i class="fas fa-graduation-cap"></i> Education</h4>
                                </div>
                                <?php
                                $flag+=1;

                              } 
						?>
                        
        
        	<div class="col-sm-3">
        		<p><?php echo $from; ?><b> To </b><?php echo $to; ?></p>
        	</div>
        	<div class="col-sm-9">
        		<b><?php echo $deg;  ?></b>
        		<p><?php echo $institute; ?></p>
        		<p><?php echo $university;  ?></p>
        		<p><?php echo $percent; ?></p>
        	</div>
        	<?php
		            }
			  }
  ?>
        
       </div>
       

        	
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
 <div class="row">
<div class="col-sm-12">
  <h4><i class="fas fa-dice-d6"></i> Skills</h4>

				     <ul>
				     	<li><?php echo $skill1; ?></li>
					<li><?php echo $skill2; ?></li>
					<li><?php echo $skill3; ?></li>
					<li><?php echo $skill4; ?></li>
					<li><?php echo $skill5; ?></li>
				     </ul>

				     		<?php
				     	}

				     

		}
		?>
        </div>
        </div>
 
      
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
  <div class="row"> 
 <div class="col-sm-12">
 <h4><i class="fas fa-dice-d6"></i> Hobbies</h4>
				     <ul>
				     <li><?php echo $h1; ?></li>
					<li><?php echo $h2; ?></li>
					<li><?php echo $h3; ?></li>
					<li><?php echo $h4; ?></li>
				     	
				     </ul>
				     <?php
            }
           
                     }

			?>
        	</div>
        </div>

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

          <div class="row">
          <div class="col-sm-12">

                     <h4><i class="fas fa-dice-d6"></i> Software</h4>
 				     <ul>
				     	<li><?php echo $s1; ?></li>
					<li><?php echo $s2; ?></li>
					<li><?php echo $s3; ?></li>
					<li><?php echo $s4; ?></li>
				     	
				     </ul>
				     	<?php
				     }
				     


			}
			}
			?>        	</div>
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
                                 <h4> <i class="fas fa-th-list"></i> projects</h4>
                               </div>
                              <?php  
                               $flag+=1;
                              }   
					     ?>
        	
            <div class="col-sm-3">
            	<b><?php echo $prjtitle; ?></b>
            </div>
            <div class="col-sm-9">
            	<b><?php echo $language; ?></b>
            	<p><?php echo $prjabout; ?></p>
            	<p><?php echo $time; ?></p>
            </div>
<?php
					}
					}
					}

					?>
        </div>

	</div>
  <div class="container" style="margin-top: 10px;">
  
  <div class="panel-default">
    <div class="panel-heading">
      Operations:-
    </div>
    <div class="panel-body">
      <form method="post" name="printr" action="#">
        <div class="row">
        <div class="col-sm-6">
    
    <button  id="printdoc" onclick="printc()" name="print" class="btn btn-primary btn-block"><i class="fas fa-print"></i>  Print</button>
  
  </div>
 
  <div class="col-sm-6">
 
    <button type="submit" name="update" class="btn btn-primary btn-block"> <i class="far fa-edit"></i>  Update</button>
 
  </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</div>
</body>
</html>