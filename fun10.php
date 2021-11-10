<?php
	$a=10;
	function value_print()
	{
		global $a;#error if no global statement
		echo "$a";
	}
	value_print();
?>