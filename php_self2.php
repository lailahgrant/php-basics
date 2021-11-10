<!DOCTYPE html>
<html>
<head>
	<title>lailah</title>
</head>
<body>

<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
	Enter first number: <input type="text" name="f"><br>
	Enter second number: <input type="text" name="s"><br>
	select an operation :<select name="op"><option value="1">Addition</option>
	<option value="2">Subtraction</option>
	<option value="3">Division</option>
	<option value="4">Multiplication</option>
	</select><br>
<input type="submit" name="ok" value="calculate">
</form>

<?php

if(isset($_POST['ok']))
{
	$num1=$_POST['f'];
	$num2=$_POST['s'];
	$op=$_POST['op'];

	if((!empty($num1)) && (!empty($num2)))
	{
		switch($op)
		{
			case 1:$add=$num1+$num2;
			echo "<h1>Addition of $num1 and $num2 is".$add."</h1>";
			break;

			case 2:$sub=$num1-$num2;
			echo "<h1>Subtraction of $num1 and $num2 is".$sub."</h1>";
			break;

			case 3:$div=$num1/$num2;
			echo "<h1>Division of $num1 and $num2 is".$div."</h1>";
			break;
		}
	}
		else
			echo "<b>Please enter both 2 nos</b>";
	

}




/*if(isset($_POST['ok']) and isset($_POST['f']) and isset($_POST['s']))
{
$num1=$_POST['f'];
$num2=$_POST['s'];
function add()
{
/*$total=$num1+$num2;
echo 'the total is '.$total;*/
/*}

function sub()
{
$total=$num1-$num2;
echo 'the total is '.$total;
}
function div()
{
$total=$num1/$num2;
echo 'the total is '.$total;
}

function mul()
{
$total=$num1*$num2;
echo 'the total is '.$total;
}

$z=$_POST['op'];	
	switch($z)
	{
	case 1:
		add();
		$total=$num1+$num2;
echo 'the total is '.$total;
		echo "Addition of $a and $b is $c";
		break;
	}	



}*/



?>

</body>
</html>