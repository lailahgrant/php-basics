<?php
	$sum=10;
	$total=100;
	echo "value of new total is $total<br>";

	$total=&$sum;
	echo "Value of sum is  $sum<br>";
	echo "Value of total is $total";
?>