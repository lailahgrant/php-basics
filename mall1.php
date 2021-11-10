<?php

session_start();
$s1=$_POST['p1'];
$s2=$_POST['pr1'];
$s3=$_POST['pro1'];

echo '<h3>Shopping Bill</h3>';
echo 'Product bought :: '.$_SESSION['p'].'<br>';
echo 'Quantity :: '.$_SESSION['pr'].'<br>';
echo 'Cost :: '.$_SESSION['pro'].'<br>';
$tot= $_SESSION['pr'] * $_SESSION['pro'];
echo 'Total Cost :: '.$tot.'<br>';



echo 'sexond Product :: '.$s1.'<br>';
echo 'Quantity :: '.$s2.'<br>';
echo 'Cost :: '.$s3.'<br>';
$total=$s2*$s3;
echo 'Total cost :: '.$total.'<br>';


?>