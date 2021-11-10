<!DOCTYPE html>
<html>
<head>
	<title>session</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['count']))
{
	$_SESSION['count']=$_SESSION['count']+1;
}
else
{
	$_SESSION['count']=1;
}

?>

<button style="background-color: pink;" type="button"> <?php echo '<h3>This page is accessed</h3>'.$_SESSION['count']; ?></button>

</body>
</html>