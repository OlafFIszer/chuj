<?php
$salaHD = 10;
$salaHW = $salaHD * 7;
$IGT1= $_POST['IGodzin1'];
$IGT2= $_POST['IGodzin2'];
$IGT3= $_POST['IGodzin3'];
$IGT4= $_POST['IGodzin4'];
$IGT5= $_POST['IGodzin5'];
$IGT6= $_POST['IGodzin6'];
$IGT7= $_POST['IGodzin7'];
$IGT8= $_POST['IGodzin8'];
$IGT9= $_POST['IGodzin9'];
$IGT10= $_POST['IGodzin10'];
$IGTO = $IGT1 + $IGT2 + $IGT3 + $IGT4 + $IGT5 + $IGT6 + $IGT7 + $IGT8 + $IGT9 + $IGT10;

$IS = ceil($IGTO / $salaHW);
echo "potrzeba minimum $IS Sal";
?>