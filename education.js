function addmore()
{
	
	var a=document.getElementById("degree").value;
	var b=document.getElementById("institution").value;
	var c=document.getElementById("univercity").value;
	var d=document.getElementById("specialization").value;
	var e=document.getElementById("fromdate").value;
	var f=document.getElementById("todate").value;
	var g=document.getElementById("percent").value;

	document.getElementById("txtdegree").value=a;
	document.getElementById("txtinst").value=b;
	document.getElementById("txtuniver").value=c;
	document.getElementById("txtspec").value=d;
	document.getElementById("txtstart").value=e;
	document.getElementById("txtend").value=f;
	document.getElementById("txtper").value=g;

	
 
		return true;
	}
	document.getElementById("next").onclick = function() {
  window.location.href = "http://localhost/resume/skills.php";
};
