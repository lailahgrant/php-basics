<!DOCTYPE html>
<html>
<head>
	<title>Lai;a</title>
</head>
<body>

<?php

	session_start();
	$m1=$_POST['p'];
	$m2=$_POST['pr'];
	$m3=$_POST['pro'];

	$_SESSION['p']=$m1;
	$_SESSION['pr']=$m2;
	$_SESSION['pro']=$m3;

?>

<form action="mall1.php" method="post">
	<input type="text" name="p1" placeholder="product">
	<input type="text" name="pr1" placeholder="quantity">
	<input type="text" name="pro1" placeholder="cost">

	<input type="submit" value="next">
</form>

</body>
</html>