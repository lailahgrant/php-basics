<?php
	#function with parameters
function add($a,$b)
{
	$c=$a+$b;
	echo "The addition of $a and $b is  ";
	return $c;#mtd 2
}
#echo add(10,20);only echo is mtd 2

#mtd 3
$x=add(10,20);
echo "$x";
?>