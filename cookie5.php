<!DOCTYPE html>
<html>
<head>
	<title>lailah</title>
</head>
<body>

<form action="cookiee5.php" method="post"> 
	<h4>Enter the policy details</h4>
	<table>
		<tr><td>Policy_no:</td><td><input type="text" name="pn"></td></tr><br><br>
		<tr><td>Name:</td><td><input type="text" name="ne"></td></tr><br><br>
		<tr><td>Premium:</td><td><input type="text" name="pr"></td></tr><br><br>
		<tr><td><input type="submit" name="ok" value="send"></td></tr>
	</table>
</form>

<?php

setcookie("nm",$_POST['nm'],time()+3600);
setcookie("ad",$_POST['ad'],time()+3600);
setcookie("mb",$_POST['mb'],time()+3600);

?>

</body>
</html>