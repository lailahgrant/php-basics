<?php
$a=10;
$b=10;
$c='10';
if($a==$b)
{
	echo"$a and $b are equal";
}
else
{
	echo "$a and $b are not equal";
}

if($a==$c)
{
	echo"<br>$a and $c are equal";
}
else
{
	echo "$a and $c are not equal";
}

if ($a===$c) 
{
	echo "<br>a and b are equal since operator checks both values and datatypes";
}
else
{
	echo "<br>a and b are not equal since operator checks both values and datatypes";
}