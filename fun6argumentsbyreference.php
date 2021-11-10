<?php
	function addfive($num)
	{
		$num+=5;
	}
	function addsix(&$num)#address of a number
	{
		$num+=6;
	}
	$orignum=10;
	addfive($orignum);
	echo "Original value is $orignum<br>";
	addsix($orignum);
	echo "Original value is $orignum<br>";#hence its reflected outside the fn
?>