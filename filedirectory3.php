<?php
#shows current directory (the one being used)
echo getcwd();
echo "<br>";

#change directory (use existing directory)
chdir("\users");
echo getcwd();
echo "<br>";

$path="D:/lailah/QU'RAN";
chdir("$path");
echo getcwd();
echo "<br>";

?>