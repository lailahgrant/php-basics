<?php
echo $_SERVER['HTTP_REFERER'];//check the page is called from 'http' or 'https'
echo "<br>";
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_ADDR'];//pings with server of website
echo "<br>";
echo $_SERVER['SERVER_NAME']; //where you hosted
echo "<br>";
echo $_SERVER["SERVER_PROTOCOL"]; //protocal used
echo "<br>";
echo $_SERVER["SERVER_PORT"]; //port on wc apache z
echo "<br>";
echo $_SERVER["REMOTE_ADDR"]; //pings with server of website
echo "<br>";
echo $_SERVER["HTTP_USER_AGENT"]; //browsers
#NB: 1st 4 [''], last 4 [""];
echo "<br><br>";

if($_SERVER['REQUEST_METHOD']=='GET')
{
	echo "GET IS USED";
}
else
{
	die("USE ONLY GET");

}
echo "<br><br>";

if($_SERVER['REQUEST_METHOD']=='POST')
{
	echo "POST IS USED";
}
else
{
	die("USE ONLY POST");
}

?>
