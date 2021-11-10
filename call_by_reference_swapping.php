<?php

$a=10;
$b=20;
echo "<h2>Before swapping<br>";
echo "<h3>a=$a , b=$b<br>";
function swap(&$a,&$b)
{
	$temp=$a;
	$a=$b;
	$b=$temp;
}

swap($a,$b);
echo "<h2>After swapping<br>";
echo "<h3>a=$a , b=$b";


?>