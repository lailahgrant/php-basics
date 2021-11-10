<?php
session_start();
$eno=$_GET['s'];
$enm=$_GET['se'];
$eadd=$_GET['ses'];

$_SESSION['s']=$eno;
$_SESSION['se']=$enm;
$_SESSION['ses']=$eadd;
?>