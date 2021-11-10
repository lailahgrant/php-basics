<?php

$path="C:/xampp/htdocs/phpwork"; #specified directory
$handle=opendir($path);
while(($file=readdir($handle))!==false)
{
	echo "$file<br>";//file name
}

?>