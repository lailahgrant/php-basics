<?php
	function one()
	{
		static $one=5;
		echo "$one<br>";
		$one++;
	}
	one();
	one();
	one();
	one();
	one();
	one();
?>