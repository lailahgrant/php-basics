<!DOCTYPE html>
<html>
<head>
	<title>lailah</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
	<table>
		<tr><td><h3>Enter ist no:<input type="text" name="no1"></h3></td></tr>
		<tr><td><h3>Enter 2nd no:<input type="text" name="no2"></h3></td></tr>
		<tr><td><b>Select an Operation to be calculated for you:</b></td>
		<td>
			<select name="cal">
				<option value="1">Addition</option>
				<option value="2">Subtraction</option>
				<option value="3">Multiplication</option>
				<option value="4">Division</option>
			</select>
		</td>	
		</tr>
		<tr><td><input type="submit" name="submit" value="calculate"></td></tr>
	</table>	
</form>

<?php

if(isset($_POST['submit']))
{
	$no1=$_POST['no1'];
	$no2=$_POST['no2'];
	$cal=$_POST['cal'];

	if((!empty($no1)) && (!empty($no2)))
	{
		switch($cal)
		{
			case 1: 
				$add=$no1+$no2;
				echo "<h1>Addition of $no1 and $no2 is ".$add."</h1>";
				break;

			case 2:
				$sub=$no1-$no2;
				echo "<h1>Subtraction of $no1 and $no2 is ".$sub."</h1>";
				break;

			case 3:
				$div=$no1/$no2;
				echo "<h1>Division of $no1 and $no2 is ".$div."</h1>";
				break;	

		}
	}
	else
		echo "<b>Please enter both 2 nos</b>";
}

?>

</body>
</html>