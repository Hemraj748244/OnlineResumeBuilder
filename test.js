function fill() {
	var a = document.getElementById("txtid").value;
	document.getElementById("t").value=a;
	
	return true;
}

  $uid=$_SESSION['uid'];
      $degree=$_POST['txtdegree'];
      $inst=$_POST['txtinst'];
      $univ=$_POST['txtuniver'];
      $spec=$_POST['txtspec'];
      $sdate=$_POST['txtfrom'];
      $edate=$_POST['txttodate'];
      $percent=$_POST['txtpercent'];



      document.getElementById("degree").value="";
	document.getElementById("institution").value="";
	document.getElementById("univercity").value="";
    document.getElementById("specialization").value="";
    document.getElementById("fromdate").value="";
    document.getElementById("todate").value="";
    document.getElementById("percent").value="";