<?php

setcookie('name','lailah');
setcookie('names','Grant', time()+10);
#view cookie
echo ' '.$_COOKIE['name'].'<br>';
echo $_COOKIE['names'];

?>