<?php
	$a=10;
	function value_print()
	{
		$a=45;
		echo "$a<br>";
		global $a;

	}
	value_print();
	echo "$a";
?>