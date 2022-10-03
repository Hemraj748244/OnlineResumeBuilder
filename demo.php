<?php 
session_start();
 ?>

    <?php 

  
             if(isset($_POST["update"]))

             {
              global  $fname=$_POST['fname'];
             global $mname=$_POST['mname'];
             global $lname=$_POST['lname'];
             global $dob=$_POST['dob'];
             global $mobile=$_POST['mobile'];
             global $address=$_POST['address'];
             global $carr=$_POST['carrierobj'];
        
      $con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,"resumedata");
$uid='30';
        $qry="select * from personal where uid='$uid' ";
  $respersonal=mysqli_query($con,$qry);
        
        $rows = mysqli_num_rows($respersonal);
        //     //echo'USER EXIST';
        if ($rows>0)
        {
            while($row = mysqli_fetch_array($respersonal))
            { 
             global  $fname=$row['fname'];
             global $mname=$row['mname'];
             global $lname=$row['lname'];
             global $dob=$row['dob'];
             global $mobile=$row['mobile'];
             global $address=$row['address'];
             global $carr=$row['carrierobj'];

             }
         }

      $query = "UPDATE u SET fname = '$fname' ,  mname='$mname' , lname = '$lname' , dob= '$dob', mobile= '$mobile' , address= '$address' ,   carrierobj= '$carr' WHERE uid='$uid'";

        $respersonal=mysqli_query($con,$qry);
         if($respersonal==false){
            die(mysql_error());
        }
          header("Location: Grid.php");
        return mysql_affected_rows();

        //echo'<pre>';print_r($result);exit();
        
        exit();
        
        
    }


    ?>

  <!DOCTYPE html>
   <html>
   <head>
       <title>Edit Data</title>
   </head>
   <body>
     <div class="form">
      <h2>Edit Data</h2>
     <form method="post"  action="update1.php">
     <input type="hidden" value="<?php echo $id;?>" name="id">
      <!-- <input type="text" name="name" placeholder="Username"/> -->
      <input type="text" name="fname" value="<?php echo $fname;?>" placeholder="First Name"/>
      <input type="text" name="mname" value="<?php echo $mname;?>" placeholder="Middle Name"/>
      <input type="text" name="lname" value="<?php echo $lname;?>" placeholder="Last Name"/>
      <input type="text" name="dob" value="<?php echo $dob;?>" placeholder="DOB"/>
      <input type="text" name="mobile" value="<?php echo $mobile;?>" placeholder="Mobile"/>
      <input type="text" name="address" value="<?php echo $address;?>" placeholder="Address"/>
      <input type="text" name="carrierobj" value="<?php echo $carr;?>" placeholder="Carrier Objective"/>
      <input type="submit" name = "update" value="Update">
    </form>
  </div>
   </body>
   </html>

    <script type="text/javascript">
    $('#printdoc').click(function(){
      $('.container').printThis({
        debug: false,
        importCSS: true,
        importStyle:true,
        printContainer:true,
        loadCSS:"http://localhost/resume/temp2.css",
        
        pageTitle:"Your Resume",
        removeInline:false,
        printDelay:33,
        header:null,
        footer:null,
        formValues:true,
        canvas:false,
        base:false,
        docTypeString:'<!DOCTYPE html>',
        removeScripts:false,
        copyTagClasses:false

      });
    })
  </script>