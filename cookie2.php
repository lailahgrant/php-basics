
<?php


if (isset($_GET['name']))
{ 
	$a=$_COOKIE['cnt'];
	$a=$a+1;
	setcookie('cnt',$a);
}
else
{
	setcookie('cnt',2);
	echo "You accessed tis page first time";
}
echo "you accessed this page $a times";

?>