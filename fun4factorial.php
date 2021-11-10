<?php
	function factorial()
	{
	$a=5;
	$f=1;

	while ($a>=1) {
		$f=$f*$a;
		$a=$a-1;
	}
	echo "factorial of a is $f";
	}
	factorial();
?>