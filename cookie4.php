<!--<?php
/*setcookie("MyCookie",$value);
setcookie("Anaza",$)*/

?>
-->

<?php
#set cookies
setcookie("name","lailah Grant");
setcookie("age","78");

?>

<!DOCTYPE html>
<html>
<head>
	<title>lailah</title>
</head>
<body>
<?php 
#accessing cookies $_COOKIE or $HTTP_COOKIE_VARS
echo "My name is ".$_COOKIE['name']."<br>";
echo "And I am ".$_COOKIE['age'];

?>
</body>
</html>