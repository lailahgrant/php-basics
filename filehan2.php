<?php

$file="C:/xampp/htdocs/phpwork/la.txt";#already existing file
$fp=fopen($file, 'r');
#a=writes @ the end of content
$fpp=fopen("C:/xampp/htdocs/phpwork/lai.txt", "a");#creates its own self
fwrite($fpp, fread($fp, filesize($file)));
echo "data copy done";
?>