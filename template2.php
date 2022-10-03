
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
  <title>Resume Template</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
 <link rel="stylesheet" type="text/css" href="temp2.css">
  
  <script type="text/javascript">
    function printc()
    {
      var restore=document.body.ineerHTML;
      var c=document.getElementById('printable').innerHTML;
      document.body.innerHTML=c;
      window.print();
    }
  </script>
  <style type="text/css">
    @media print
    {
      .well center h6
{
  font-family: fantasy;
  font-weight: bolder;
  font-size: 40px;
  color: rgb(0, 51, 102);
}
      
.panel .panel-heading
{
  color: rgb(0, 51, 102);
  background-color: rgb(242, 242, 242);
  font-size: 22px;
}
    }
  </style>
  </head>
  <body>
  <div class="wrapper" >
  <div class="container" id="printable" style="border:1px solid black;">
  <div class="row">
  <div class="col-sm-12">
  <div class="well">
  <center><?php echo "<h6>"."$fname $mname $lname"."</h6>"; ?></center>
  </div>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-default">
  <div class="panel-heading">
  <span class="glyphicon glyphicon-asterisk"><b>Personal Info</b></span> 
  </div>
  <div class="panel-body">
  <ul class="list-group">
  <li class="list-group-item">
  <span class=" glyphicon glyphicon-home">&nbsp<?php echo "$address"; ?></span>
  </li>
  <li class="list-group-item">
  <span class="glyphicon glyphicon-phone">&nbsp<?php echo "$mobile"; ?></span>
  </li>
  <li class="list-group-item">
  <span class="glyphicon glyphicon-envelope">&nbsp<?php echo "$email"; ?></span>
  </li>

  </ul>
  </div>
  </div>

  </div>

  </div>
  <div class="row">
  <div class="col-sm-12">

  <div class="panel panel-default">
  <div class="panel-heading">
  <span class="glyphicon glyphicon-asterisk"><b>Career Objective</b></span> 
  </div>
    <div class="panel-body">
     <p><?php echo "$carr"; ?></p>
    </div>
  </div>
  
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-default">
  <div class="panel-heading">
  <span class="glyphicon glyphicon-asterisk"><b>Qualification</b></span> 
  </div>
  <div class="panel-body">
  <table class="table table-striped">
  <thead>
  <tr>
  <th scope="col">DEGREE</th>
  <th scope="col">INSTITUTE</th>
  <th scope="col">UNIVERCITY</th>
  <th scope="col">SPECILIZATION</th>
  <th scope="col">FROM</th>
  <th scope="col">TO</th>
  <th scope="col">CGPA/PERCENTAGE</th>
  </tr>
  </thead>
  <tbody>
  <?php 
      
  while($row=mysqli_fetch_assoc($reseducation))
  {
  $deg=$row['degree'];
  $institute=$row['institute'];
  $university=$row['university'];
  $specilization=$row['specialization'];
  $from=$row['startd'];
  $to=$row['endd'];
  $percent=$row['percentage'];
  echo "<tr>";
  echo "<td>".$deg."</td>";
  echo "<td>".$institute."</td>";
  echo "<td>".$university."</td>";
  echo "<td>".$specilization."</td>";
  echo "<td>".$from."</td>";
  echo "<td>".$to."</td>";
  echo "<td>".$percent."</td>";
  echo "</tr>";
  }
  ?>



  </tbody>
  </table>
  </div>
  </div>
    
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
  <div class="panel panel-default">
  <div class="panel-heading">
  <span class="glyphicon glyphicon-asterisk"><b>Experience</b></span> 

  </div>
  <div class="panel-body">
  <table class="table table-striped">
    <thead>
         <tr>
        <th scope="col">JOB TITLE</th>
        <th scope="col">COMPANY NAME</th>
        <th scope="col">CITY</th>
        <th scope="col">STATE</th>
        <th scope="col">FROM</th>
        <th scope="col">TO</th>
        </tr>
    </thead>
    <tbody>
      <?php
  while($row=mysqli_fetch_assoc($resexperience)) 
  {
  $job=$row['jobtitle'];
  $employer=$row['employer'];
  $city=$row['city'];
  $state=$row['state'];
  $startd=$row['startdate'];
  $endd=$row['enddate'];
  echo "<tr>";
  echo "<td>".$job."</td>";
  echo "<td>".$employer."</td>";
  echo "<td>".$city."</td>";
  echo "<td>".$state."</td>";
  echo "<td>".$startd."</td>";
  echo "<td>".$endd."</td>";
  echo "</tr>";
  }
  ?>
  </tbody>
  </table>
  </div>
  </div>
  </div>
  </div>
  <div class="row">
   <div class="col-sm-12">
      <div class="panel panel-default">
      <div class="panel-heading">
        <span class="glyphicon glyphicon-asterisk"><b>SKILLS</b></span> 
      </div>
      <div class="panel-body">
        <?php 
          $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
 $skills="SELECT * FROM skills WHERE uid='$user'";
 $resskills=mysqli_query($con,$skills);
        echo "<ul>";
        while($row=mysqli_fetch_assoc($resskills))
     { 
        $skill1=$row['skill1']; 
        $skill2=$row['skill2']; 
        $skill3=$row['skill3']; 
        $skill4=$row['skill4']; 
        $skill5=$row['skill5']; 

     echo "<li>".$skill1."</li>";
     echo "<li>".$skill2."</li>";
     echo "<li>".$skill3."</li>";
     echo "<li>".$skill4."</li>";
     echo "<li>".$skill5."</li>";

     }
       echo "</ul>";
         ?>
      </div>
    </div>
   </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
           <span class="glyphicon glyphicon-asterisk"><b>HOBBIES</b></span> 
        </div>
        <div class="panel-body"> 
           <?php 
          $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
 $hob="SELECT * FROM hobby WHERE uid='$user'";
 $reshobby=mysqli_query($con,$hob);
        echo "<ul>";
        while($row=mysqli_fetch_assoc($reshobby))
     { 
        $h1=$row['hob1']; 
        $h2=$row['hob2']; 
        $h3=$row['hob3']; 
        $h4=$row['hob4']; 
        

     echo "<li>".$h1."</li>";
     echo "<li>".$h2."</li>";
     echo "<li>".$h3."</li>";
     echo "<li>".$h4."</li>";

     }
       echo "</ul>";
         ?>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
   <div class="col-sm-12">
    <div class="panel panel-default">
      <div class="panel-heading">
          <span class="glyphicon glyphicon-asterisk"><b>SOFTWARE KNOWN</b></span> 
      </div>
      <div class="panel-body">
         <?php
    $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
    $projects="SELECT * FROM software WHERE uid='$user'";
    $ressoft=mysqli_query($con,$projects);
  if($ressoft)
  {
  echo "<ul>";
  while($row=mysqli_fetch_assoc($ressoft))
  {
  $s1=$row['soft1'];
  $s2=$row['soft2'];
  $s3=$row['soft3'];
  $s4=$row['soft4'];

  


  echo   "<li>"."<b>".$s1."</b>"."</li>";
  echo   "<li>"."<b>".$s2."</b>"."</li>";
  echo  "<li>"."<b>".$s3."</b>"."</li>";
  echo  "<li>"."<b>".$s4."</b>"."</li>";




  }
  echo "</ul>";
  }

  ?>
      </div>
    </div>
    
  </div>
  </div>
  <div class="row">
  <div class="col-sm-12">
    <div class="panel panel-default">
  <div class="panel-heading">
      <span class="glyphicon glyphicon-asterisk"><b>Projects</b></span> 
  </div>
  <div class="panel-body">
      
      <table class="table table-striped">
    <thead>
         <tr>
        <th scope="col">PROJECT TITLE</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">LANGUAGE</th>
        <th scope="col">DURATION</th>
        </tr>
    </thead>
    <tbody>
      <?php
  $con=mysqli_connect("localhost","root","");
    $db=mysqli_select_db($con,"resumedata");
    $user=$_SESSION['uid'];
    $projects="SELECT * FROM projects WHERE uid='$user'";
    $resprojects=mysqli_query($con,$projects);
  if($resprojects)
  {

  while($row=mysqli_fetch_assoc($resprojects))
  {
  $prjtitle=$row['title'];
  $prjabout=$row['about'];
  $language=$row['lang'];
  $time=$row['duration'];
  echo "<tr>";
  echo "<td>".$prjtitle."</td>";
  echo "<td>".$prjabout."</td>";
  echo "<td>".$language."</td>";
  echo "<td>".$time."</td>";
  echo "</tr>";
  }
}
  ?>
  </tbody>
  </table>


  </div>
  </div>
  </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default">
        <div class="panel-heading">
           <span class="glyphicon glyphicon-asterisk"><b>Declration</b></span>
        </div>
        <div class="panel-body">
          <h5>
            I do hereby declare that all the information provided in the resume is in the knowledge of me.
          </h5>
          <div class="row">
            <div style="text-align: left;">
            <b>Date:-</b>
          </div>
          <div style="text-align: right">
            <b>Signature:-</b>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>
<div class="container" style="margin-top: 10px;">
  <div class="row">
  <div class="panel-default">
    <div class="panel-heading">
      Operations:-
    </div>
    <div class="panel-body">
      <form method="post" name="printr" action="#">
        <div class="col-sm-6">
    
    <button  id="printdoc" onclick="printc()" name="print" class="btn btn-primary btn-block">Print</button>
  
  </div>
 
  <div class="col-sm-6">
 
    <button type="submit" name="update" class="btn btn-primary btn-block">Update</button>
 
  </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
 <script src="jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.js"></script>
</body>
</html>
