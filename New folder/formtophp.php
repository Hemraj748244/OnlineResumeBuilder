<!DOCTYPE html>
<html>
<head>
	<title>Printing the Form Data</title>
</head>
<body>
<form action="#" method="get">
 <input type="checkbox" name="chk[]" value="Java">Java</input>
 <input type="checkbox" name="chk[]" value="Php">Php</input>
 <input type="checkbox" name="chk[]" value="Net">.Net</input>
 <input type="checkbox" name="chk[]" value="C#">C#</input>
 <input type="submit" name="print" value="Print">
</form>
<div>
<?php

in_array($_GET['chk']){
foreach($_GET['chk'] as $value)
{
echo "You Selected".$value;
}
}
?>
</div>
</body>
</html>