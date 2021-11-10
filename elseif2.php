<?php
$a=10;
$b=100;
$c=1000;

if (($a>$b)&&($a>$c)) 
{
echo "$a is maximum of $b and $c";
}
elseif (($b>$a)&&($b>$c)) 
{
echo "$b is maximum of $a and $c";
}
else
{
	echo "$c is maximum of $a and $b";
}
?>