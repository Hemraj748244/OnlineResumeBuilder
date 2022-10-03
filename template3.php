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
	<title>Template 3</title>
	<link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="csss/all.css">
<link rel="stylesheet" type="text/css" href="temp3.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript">
    function printc()
    {
      var restore=document.body.inerHTML;
      var c=document.getElementById('printable').innerHTML;
      document.body.innerHTML=c;
      window.print(c);
    }
  </script>
 
</head>
<body>
<div class="wrapper">
  <div class="container" id="printable">
  
    <div class="row">
      <div class="col-sm-4" style="align-items: left;">
                  <div class="row">
                    <div class="name">
                  <h2 style="color: rgb(0, 0, 102);"><?php echo "$fname $mname $lname"; ?></h2>
                  </div>
                  </div>
                    
                    <div class="row">
         <div class="pinfo">

                    <h4 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;" ><b><i class="fa fa-user-tie"></i> Personal Info</b></h4>
                    <b>DOB</b>
                    <p><?php echo "$dob"; ?></p>
                    <b>Address</b>
                    <p><?php echo "$address"; ?></p>
                    <b>Mobile</b>
                    <p><?php echo "$mobile"; ?></p>
                    <b>E-mail</b>
                    <p><?php echo "$email"; ?></p>
                  </div>

                    </div>
            <div class="row">
     <div class="skills">
                  
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
                      <h4 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;" ><b><i class="fas fa-laptop-code"></i> Skills</b></h4>
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
                
 <div class="row">
    <div class="software">
                    
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
                <h4 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;" ><b><i class="fas fa-desktop"></i> Softwares</b></h4>
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
                  
                    ?>
                   </div>
                    </div>
                     

                     <div class="row">
    <div class="hobbies">
                    
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
    
                   <h4 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;" ><b> <i class="far fa-heart"></i> Hobbies</b></h4>
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

                   

      </div>
      <div class="col-sm-8">
                   <div class="row">
                           <div class="carrobj">
                     <?php echo "<p>".$carr."</p>"; ?>
                        </div>
                   </div>
                <div class="row">
                  
                          <div class="exp">

                           
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
                                         <h3 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;"><b><i class="fas fa-briefcase"></i> EXPERIENCE</b></h3>
                                      </div>
                            <div class="col-sm-12">
                              <p><?php echo $startd; ?> - <?php echo $endd; ?></p>
                            </div>
                            <div class="col-sm-12">
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
                           </div>

                 <div class="row">
                              <div class="edu">
                            
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
                                   <h3 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;"><b> <i class="fas fa-graduation-cap"></i> EDUCATION</b></h3>
                                <?php
                                $flag+=1;

                              } 
                                       ?>
                              <div class="col-sm-12">
                                <p><?php echo $from; ?> - <?php echo $to; ?></p>
                              </div>
                              <div class="col-sm-12">
                                <b><?php echo $deg;  ?></b>
                                <p><?php echo $institute; ?> </p>
                                <p><?php echo $university;  ?></p>
                                <p><?php echo $percent."%"; ?></p>
                                 <hr>
                              </div>

                              <?php
                            }
                            }
                            ?>
                            </div>
                 </div>

                  <div class="row">
                              <div class="prj">
                              
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
                                   <h3 style="border:1px solid black;border-radius: 500px 200px; border-color: green; background-color:rgb(0, 0, 102); color: white;"><b> <i class="fas fa-th-list"></i> PROJECTS</b></h3>
                                <?php
                                $flag+=1;

                              }     




                               ?>
                               <div class="col-sm-12">
                               <p><?php echo $time; ?></p>
                              </div>
                              <div class="col-sm-12">
                                <b><?php echo $prjtitle; ?></b>
                                <p> <?php echo $prjabout; ?> </p>
                               <b><?php echo $language; ?></b>
                               <hr>
                              </div>
                              <?php

                            }
                            }
                          }
                            ?>
                            </div>
                 </div>
      </div>
    </div>
</div>
    <div class="container" style="margin-top: 10px;">
  
  <div class="panel-default">
   
    <div class="panel-body">
      <form method="post" name="printr" action="#">
        <div class="row">
        <div class="col-sm-6">
    
    <button  id="printdoc" onclick="printc()" name="print" class="btn btn-primary btn-block"><i class="fas fa-print"></i> Print</button>
  
  </div>
 
  <div class="col-sm-6">
 
    <button type="submit" name="update" class="btn btn-primary btn-block"><i class="far fa-edit"></i> Update</button>
 
  </div>
      </form>
    </div>
  </div>
</div>

  </div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>