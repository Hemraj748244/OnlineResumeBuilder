




<!DOCTYPE html>
<html>
<head>
  <title>Update your resume</title>
    <style type="text/css">
    body
    {
      background-image: url('<?php echo $url; ?>')
    }
  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="navstyle.css">
<link rel="stylesheet" type="text/css" href="update1.css">
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

<div class="container-fluid">
  <div class="panel panel-default">
    <div class="panel-heading" >
      Update Your Resume
    </div>
    <div class="panel-body">
      
                <div class="panel panel-default">
                <div class="panel-heading">
                Personal Details:-
                </div>
                <div class="panel-body">
<form class="md-form" method="post" enctype="multipart/form-data" action="updatepersonal.php">
                            

                            <div class="form-group">
                                <label for="FIRST NAME">FIRST NAME:</label>
                                <input type="text" class="form-control" id="firstname" name="txtfname">
                            </div>
                            
                            <div class="form-group">
                                <label for="MIDDLE NAME">MIDDLE NAME:</label>
                                <input type="text" class="form-control" id="midname" name="txtmname">
                            </div>
                            
                            <div class="form-group">
                                <label for="LAST NAME">LAST NAME:</label>
                                <input type="text" class="form-control" id="lastname" name="txtlname">
                            </div>
                            
                            <div class="form-group">
                                <label for="DOB">DATE OF BIRTH:</label>
                                <input type="date" class="form-control" id="dob" name="txtdob" value="2019-01-01">
                            </div>
                            
                            <div class="form-group">
                                <label for="MOBILE">MOBILE NUMBER:</label>
                                <input type="text" class="form-control" id="mobile" name="txtmobile">
                           </div>
                            
                            <div class="form-group">
                                <label for="ADDRESS">ADDRESS:</label>
                                <input type="text" class="form-control" id="address" name="txtaddress">
                            </div>
                            
                            <div class="form-group">
                                <label for="CAREER OBJECTIVE">CAREER OBJECTIVE:</label>
                                                         <textarea type="text" class="form-control" id="objective" name="txtobj"></textarea>
                            </div>
                            
                           <div class="row">
                            <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>                          
                           </div>
 
                        </form>
                </div>
                </div>

                <div class="panel panel-default">
                <div class="panel-heading">
                Education:-
                </div>
                <div class="panel-body">
<form  class="md-form"  method="post" onsubmit="return addmore();" enctype="multipart/form-data" >


  <div class="form-group">
       <label for="degree">ENTER DEGREE:</label>
       <input type="text" class="form-control" id="degree" name="txtdegree">
       <input type="hidden" name="degree" id="txtdegree">
  </div>
  <div class="form-group">
       <label for="institution">ENTER THE NAME OF INSTITUTION:</label>
       <input type="text" class="form-control" id="institution" name="txtinst">
       <input type="hidden" name="institute" id="txtinst">
  </div>
  <div class="form-group">
       <label for="univercity">ENTER THE BOARD/UNIVERCITY:</label>
       <input type="text" class="form-control" id="univercity" name="txtuniver">
       <input type="hidden" name="univer" id="txtuniver">
  </div>
  <div class="form-group">
       <label for="specialization">ENTER THE SPECIALIZATION:</label>
       <input type="text" class="form-control" id="specialization" name="txtspec">
       <input type="hidden" name="spec" id="txtspec">
  </div>
    <div class="form-group">
       <label for="fromdate">FROM DATE:</label>
       <input type="date" class="form-control" id="fromdate" name="txtfrom" value="2019-01-01">
       <input type="hidden" name="indate" id="txtstart">
  </div>
    <div class="form-group">
       <label for="todate">TO DATE:</label>
       <input type="date" class="form-control" id="todate" name="txttodate" value="2019-01-01">
       <input type="hidden" name="outdate" id="txtend">
  </div>
  <div class="form-group">
       <label for="percent">PERCENTAGE:</label>
       <input type="text" class="form-control" id="percent" name="txtpercent">
       <input type="hidden" name="per" id="txtper">
  </div>
  <div class="row">
         <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>
                                   
       </div>

</form>
                </div>
                </div>

                <div class="panel panel-default">
                <div class="panel-heading">
                Experience:-
                </div>
                <div class="panel-body">
<form  class="md-form" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                            <label for="job title">JOB TITLE:</label>
                            <input type="text" class="form-control" id="jobtitle" name="txtjobtitle">
                  </div>
                  <div class="form-group">
                            <label for="employer">EMPLOYER:</label>
                            <input type="text" class="form-control" id="employer" name="txtemployer">
                  </div>
                  <div class="form-group">
                            <label for="city">CITY:</label>
                            <input type="text" class="form-control" id="city" name="txtcity">
                  </div>
                  <div class="form-group">
                            <label for="state">STATE:</label>
                            <input type="text" class="form-control" id="state" name="txtstate">
                  </div>
                  <div class="form-group">
                            <label for="startdate">START DATE:</label>
                            <input type="date" value="2019-01-01" class="form-control" id="startdate" name="txtstartdate">
                  </div>
                  <div class="form-group">
                            <label for="enddate">END DATE:</label>
                            <input type="date" value="2019-01-01" class="form-control" id="enddate" name="txtenddate">
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>
                    
                  </div>
                </form>
                </div>
                </div>


                <div class="panel panel-default">
                <div class="panel-heading">
                Projects:-
                </div>
                <div class="panel-body">
<form  class="md-form" onsubmit="return addmore();" method="post" enctype="multipart/form-data">


  <div class="form-group">
       <label for="prjtitle">PROJECT TITLE:</label>
       <input type="text" class="form-control" id="title" name="txtprjtitle">
       <input type="hidden" id="prjtitle" name="prjtitle">
  </div>
 
  <div class="form-group">
       <label for="aboutprj">ABOUT PROJECT:</label>
       <input type="text" class="form-control" id="about" name="txtabout">
       <input type="hidden" id="prjabout" name="about">

  </div>

  <div class="form-group">
       <label for="prjlang">LANGUAGE USED:</label>
       <input type="text" class="form-control" id="language" name="txtlang">
       <input type="hidden" id="prjlang" name="lang">

  </div>


  <div class="form-group">
       <label for="prjtime">TIME-TAKEN:</label>
       <input type="text" class="form-control" id="time" name="txttime">
       <input type="hidden" id="prjtime" name="prjtimetaken">

  </div>

 
  <div class="row">
        <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>
                                 
       </div>

</form>
                </div>
                </div>


                <div class="panel panel-default">
                <div class="panel-heading">
                Skills:-
                </div>
                <div class="panel-body">
 <form class="md-form" method="post" enctype="multipart/form-data">


  <div class="form-group">
       <label for="skill">SKILL 1:</label>
       <input type="text" class="form-control" id="skill1" name="txtskill1">
  </div>
 
  <div class="form-group">
       <label for="skill">SKILL 2:</label>
       <input type="text" class="form-control" id="skill2" name="txtskill2">
  </div>

  <div class="form-group">
       <label for="skill">SKILL 3:</label>
       <input type="text" class="form-control" id="skill3" name="txtskill3">
  </div>


  <div class="form-group">
       <label for="skill">SKILL 4:</label>
       <input type="text" class="form-control" id="skill4" name="txtskill4">
  </div>

  <div class="form-group">
       <label for="skill">SKILL 5:</label>
       <input type="text" class="form-control" id="skill5" name="txtskill5">
  </div>
 
  <div class="row">
        <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>                          
       </div>

</form>
                </div>
                </div>


                <div class="panel panel-default">
                <div class="panel-heading">
                Hobbies:-
                </div>
                <div class="panel-body">
 <form class="md-form" method="post" enctype="multipart/form-data">      

  <div class="form-group">
       <label for="skill">HOBBY 1:</label>
       <input type="text" class="form-control" id="hobby1" name="txth1">
  </div>
 
  <div class="form-group">
       <label for="skill">HOBBY 2:</label>
       <input type="text" class="form-control" id="hobby2" name="txthobby2">
  </div>

  <div class="form-group">
       <label for="skill">HOBBY 3:</label>
       <input type="text" class="form-control" id="hobby3" name="txthobby3">
  </div>


  <div class="form-group">
       <label for="skill">HOBBY 4:</label>
       <input type="text" class="form-control" id="hobby4" name="txthobby4">
  </div>

 
 
  <div class="row">
         <div class="col-sm-6">
                      <button type="button" name="btnupdate" class="btn btn-primary btn-block">UPDATE</button>
                    </div>
                    <div class="col-sm-6">
                      <button type="submit" name="btnnext" class="btn btn-primary btn-block">DELETE</button>
                    </div>                             
       </div>

</form>
                </div>
                </div>




    </div>
  </div>
</div>

</body>
</html>
