<!DOCTYPE html>
<html>
<head>
	<title>Lailah</title>
</head>
<body>

<form action="<?php $_SERVER["PHP_SELF"]?>" method="POST">
	Enter your name: <input type="text" name="nm">
	<input type="submit" name="ok" value="click me">
</form>

<?php

if(isset($_POST['ok']))
{
	$name=$_POST['nm'];
	echo "Welcome $name to Uganda";
}
else
{
	echo "not set";
}
?>

</body>
</html>