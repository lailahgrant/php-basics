<?php
	$a=$_GET['eid'];
	$e=explode('@',$a);
	if (count($e)>=2)
	echo "email contains @";
	else
	echo "email doesnt contain @";	
?>