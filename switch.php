<?php
	/*$a=date("D")
	echo $a;*/
/*$d=date("M");
echo $d;*/
$d=date("D");
echo $d;
switch ($d) {
	case "Mon":
		echo "Today is Monday";
		break;

	case "Tue":
		echo "Today is Tuesday";
		break;
		
	case "Wed":
		echo "Today is Wednesday";
		break;
		
	case "Thu":
		echo "Today is Thursday";
		break;
		
	case "Fri":
		echo "Today is Friday";
		break;
							
	default:
		echo "Wonder which day this is???";
		break;
}

?>