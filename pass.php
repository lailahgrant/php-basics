<?php

$username=$_POST['name'];
$password=$_POST['password'];

if ($username == 'Lailah' and $password == 'password1')
{
	echo "Welcome to your website";
}
else
{
	echo "Wrong password";
}

?>