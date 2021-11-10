<?php

$my=fopen("la.txt", "r") or die("Unable to open file");
while(!feof($my))
{
	echo fgetc($my);
	echo "<br>";
}
fclose($my);

?>