<!DOCTYPE html>
<html>
<head>
	<title>Lailah</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
	Enter String: <input type="text" name="str"><br>
	<input type="submit" name="submit" >
</form>

<?php

if(isset($_POST['submit']))
{
	$str=$_POST['str'];
	$nstr=strrev($str);
	echo "<br>".$nstr;
}
?>

</body>
</html>