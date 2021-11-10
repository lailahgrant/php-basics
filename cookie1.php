<?php

echo 'style is '.$_GET['c'].'<br> color is '.$_GET['coo'].'<br>Background color is '.$_GET['cook'].'<br>Size is '.$_GET['co'] ;

setcookie("set1",$_GET['c'],time()+3600);
setcookie("set2",$_GET['coo'],time()+3600);
setcookie("set3",$_GET['cook'],time()+3600);
setcookie("set4",$_GET['co'],time()+3600);

?>