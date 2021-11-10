<?php

session_start();
$e1=$_GET['b'];
$e2=$_GET['d'];
$e3=$_GET['h'];

echo "<h3>Employee details</h3>";
echo 'Number: '.$_SESSION['s'].'<br>';
echo 'Name: '.$_SESSION['se'].'<br>';
echo 'Address: '.$_SESSION['ses'].'<br><br>';

echo 'Basic: '.$e1.'<br>';
echo 'DA: '.$e2.'<br>';
echo 'HRA: '.$e3.'<br>';

$total=$e1+$e2+$e3;
echo '<h4>Total of Earnings is : '.$total.'</h4>';

?>