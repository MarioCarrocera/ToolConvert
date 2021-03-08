<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

include_once("class.php");
$demo=new MyClass();

echo "********** <br> Use with original base (62, number & letter upper case & letter lower case) <br> ********** <br> <br>";

echo  "<br> 14: "; $tmp = $demo->ot_tobase(14);echo $tmp." <br>";
echo  "<br> 61: "; $tmp = $demo->ot_tobase(61);echo $tmp." <br>";
echo  "<br> 62: "; $tmp = $demo->ot_tobase(62);echo $tmp." <br>";
echo  "<br> 960: "; $tmp = $demo->ot_tobase(960);echo $tmp." <br>";
echo  "<br> 3476: "; $tmp = $demo->ot_tobase(3476);echo $tmp." <br>";
echo  "<br> 36247: "; $tmp = $demo->ot_tobase(36247);echo $tmp." <br>";

echo "********** <br> change to base 36 (number & letter upper case) <br> ********** <br> <br>";

$demo->ot_changebase(36);

echo  "<br> 14: "; $tmp = $demo->ot_tobase(14);echo $tmp." <br>";
echo  "<br> 61: "; $tmp = $demo->ot_tobase(61);echo $tmp." <br>";
echo  "<br> 62: "; $tmp = $demo->ot_tobase(62);echo $tmp." <br>";
echo  "<br> 960: "; $tmp = $demo->ot_tobase(960);echo $tmp." <br>";
echo  "<br> 3476: "; $tmp = $demo->ot_tobase(3476);echo $tmp." <br>";
echo  "<br> 36247: "; $tmp = $demo->ot_tobase(36247);echo $tmp." <br>";

echo "********** <br> change to Hexa (number &  A B C D E F) <br> ********** <br> <br>";

$demo->ot_changebase(15);

echo  "<br> 14: "; $tmp = $demo->ot_tobase(14);echo $tmp." <br>";
echo  "<br> 61: "; $tmp = $demo->ot_tobase(61);echo $tmp." <br>";
echo  "<br> 62: "; $tmp = $demo->ot_tobase(62);echo $tmp." <br>";
echo  "<br> 960: "; $tmp = $demo->ot_tobase(960);echo $tmp." <br>";
echo  "<br> 3476: "; $tmp = $demo->ot_tobase(3476);echo $tmp." <br>";
echo  "<br> 36247: "; $tmp = $demo->ot_tobase(36247);echo $tmp." <br>";

echo "********** <br> change to Binary  <br> ********** <br> <br>";

$demo->ot_changebase(2);

echo  "<br> 14: "; $tmp = $demo->ot_tobase(14);echo $tmp." <br>";
echo  "<br> 61: "; $tmp = $demo->ot_tobase(61);echo $tmp." <br>";
echo  "<br> 62: "; $tmp = $demo->ot_tobase(62);echo $tmp." <br>";
echo  "<br> 960: "; $tmp = $demo->ot_tobase(960);echo $tmp." <br>";
echo  "<br> 3476: "; $tmp = $demo->ot_tobase(3476);echo $tmp." <br>";
echo  "<br> 36247: "; $tmp = $demo->ot_tobase(36247);echo $tmp." <br>";


echo "********** <br> To decimal from original base (62, number & letter upper case & letter lower case) <br> ********** <br> <br>";

$demo->ot_changebase(62);

echo  "<br> E: "; $tmp = $demo->ot_tobase10('E');echo $tmp." <br>";
echo  "<br> z: "; $tmp = $demo->ot_tobase10('z');echo $tmp." <br>";
echo  "<br> 10: "; $tmp = $demo->ot_tobase10('10');echo $tmp." <br>";
echo  "<br> FU: "; $tmp = $demo->ot_tobase10('FU');echo $tmp." <br>";
echo  "<br> u4: "; $tmp = $demo->ot_tobase10('u4');echo $tmp." <br>";
echo  "<br> 9Qd: "; $tmp = $demo->ot_tobase10('9Qd');echo $tmp." <br>";

echo "********** <br> Get Next in original base (62, number & letter upper case & letter lower case) <br> ********** <br> <br>";
echo  "<br> E: "; $tmp = $demo->ot_next('E');echo $tmp." <br>";
echo  "<br> z: "; $tmp = $demo->ot_next('z');echo $tmp." <br>";
echo  "<br> 10: "; $tmp = $demo->ot_next('10');echo $tmp." <br>";
echo  "<br> FU: "; $tmp = $demo->ot_next('FU');echo $tmp." <br>";
echo  "<br> u4: "; $tmp = $demo->ot_next('u4');echo $tmp." <br>";
echo  "<br> 9Qd: "; $tmp = $demo->ot_next('9Qd');echo $tmp." <br>";



echo 'Demo Finish';
?>