<!DOCTYPE html>
<html>
<head>
	<title>Table Gereratiom</title>
</head>
<body>
<form action="#" method="POST">
Enter The Number of ROWS:-<input type="text" name="txtrow">
<br>
Enter The Number of COLOUMNS:-<input type="text" name="txtcol">
<br>
<input type="submit" name="submit">	
</form>



<?php
$r=$_POST['txtrow'];
$c=$_POST['txtcol'];

echo "<table border=1  style='border-collapse: collapse'>";
	for ($row=1; $row <= $r; $row++) { 
		echo "<tr><br>";
		for ($col=1; $col <= $c; $col++) { 
		   
		   echo "<td>$col</td><br>";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
?>


	
</div>
</body>
</html>