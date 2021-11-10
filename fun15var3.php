<?php
	echo "Display is ";
	xconcat("<h1>Kemigisa "," Lailah "," Grant ");
	function xconcat()
	{
		$ans = "";
		$arg = func_get_args();
		for ($i=0; $i <func_num_args() ; $i++) 
		{ 
			$ans .=$arg[$i]."";
		}
		echo "$ans";
	}

?>