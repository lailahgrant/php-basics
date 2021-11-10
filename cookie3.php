<?php

echo "Font style is ".$_GET['c']."<br>Font size is ".$_GET['co']."<br>Background color is ".$_GET['coo']."<br>font color is ".$_GET['cooo'];

setcookie("set1",$_GET['c'],time()+3600);
setcookie("set2",$_GET['co'],time()+3600);
setcookie("set3",$_GET['coo'],time()+3600);
setcookie("set4",$_GET['cooo'],time()+3600);

?>