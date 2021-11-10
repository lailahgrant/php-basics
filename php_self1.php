<!DOCTYPE html>
<html>
<head>
	<title>Lailah</title>
</head>
<body>

<form action="<?php $_SERVER["PHP_SELF"]?>" method="GET">
	Enter any number: <input type="text" name="num">
	<input type="submit" name="ok" value="even_odd">
</form>

<?php

if(isset($_GET['ok']))
{
	$number=$_GET['num'];
	if(($number%2==0))
	{
		echo "$number is an even numbber";
	}
	else
	{
		echo "$number is an odd number";
	}	
}

?>

</body>
</html>