<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Name:-</h1>
<p>My name is hemraj singh thakur and i love to program in php</p>

<?php
$txt ="hemraj";
echo "Welcome to st. aloysius college jabalpur";
var_dump($txt);
class Men
{
	function Men()
	{
		$this->name = "hemraj";
	}
}
$n = new Men();
echo "NAme is".$n->name."thakur";

$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";
$favcolor="blue";
switch ($favcolor) {
	case "red":
		echo "Your fav. color is RED";
		break;
	case "blue":
	     echo "your fav color is BLUE";
	     break;
	case "black":
	     echo "your fav color is BLACK";
	     break;
    case "white":
          echo "your fav color is WHITE";
          break;
	default:
		echo "None of your color is fav";
		break;
}
echo("<br>");

$x=1;
while ( $x <= 10) {
	echo "Number is :-".$x."<br>";
	$x++;
}
$y=5;
do
{
	echo "number is :-".$y."<br>";
	$y++;
}
while($y<=15);

for($x=11;$x<=20;$x++)
{
	echo "number is :-".$x."<br>";

}

$name=array("hemraj","Ram","shyam","kamiini");
foreach($name as $value)
{
	echo "$value";
}

function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");

$names=array("x","z","yy");
$tot=count($names);
for($i=0;$i<$tot;$i++)
{
	echo "name is:-".$names[$i]."thakur<hr>";
}
echo "sort ascd <hr>";
sort($names);
for($i=0;$i<$tot;$i++)
{
	echo "name is:-".$names[$i]."thakur<br>";
}
echo "sort desc <hr>";
rsort($names);
for($i=0;$i<$tot;$i++)
{
	echo "name is:-".$names[$i]."thakur<br>";
}

$age=array("hemraj"=>"20","ashok"=>"18","narayan"=>"19");

foreach ($age as $x => $x_value) {
	echo $x."is".$x_value."old";
	echo "<br>";
}
echo "sort by value <hr>";
asort($age);
foreach ($age as $x => $x_value) {
	echo $x."is".$x_value."old";
	echo "<br>";
}
echo "sort by key <hr>";
ksort($age);
foreach ($age as $x => $x_value) {
	echo $x."is".$x_value."old";
	echo "<br>";
}
arsort($age);
echo "sort by value and desc <hr>";
foreach ($age as $x => $x_value) {
	echo $x."is".$x_value."old";
	echo "<br>";
}
krsort($age);
echo "sort by key and desc <hr>";
foreach ($age as $x => $x_value) {
	echo $x."is".$x_value."old";
	echo "<br>";
}
?>



</body>
</html>