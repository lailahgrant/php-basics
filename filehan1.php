<?php
#program to display content in the la.txt or any .txt file
$fpath="C:/xampp/htdocs/phpwork/la.txt";
$fh=fopen("$fpath", "r");

$fs=filesize($fpath);
$fr=fread($fh, $fs);
fclose($fh);

echo "$fr"; #displays content in the .txt file

?>