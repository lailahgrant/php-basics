<?php
# . shows current directory
$handle=opendir(".");
while(($file=readdir($handle))!==false)
{
	echo "$file <br>";
}
closedir($handle);
?>