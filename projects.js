function addmore()
{
	var a=document.getElementById("title").value;
	var b=document.getElementById("about").value;
	var c=document.getElementById("language").value;
	var d=document.getElementById("time").value;
	document.getElementById("prjtitle").value=a;
	document.getElementById("prjabout").value=b;
	document.getElementById("prjlang").value=c;
	document.getElementById("prjtime").value=d;
if(a=b=c=d="")
{
	window.alert("All feilds are required");
	return false;
}
return true;
}