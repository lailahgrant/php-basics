<?php

$path="C:/xampp/htdocs/phpwork/la.txt";

#filename
echo basename($path);
echo "<br>";

#without filename(extension)
echo basename($path,".txt");

?>