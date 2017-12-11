<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 11.12.2017
 * Time: 12:38
 */
// defineeri 8 muutujat, mille väärtuseks
// on täisarvus, reaalarvud, sõned ja boolean värtused
$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = true;
$var8 = false;
// väljastame väärtused ja nende tüübid
echo $var1.' - '.gettype($var1).'<br />';
echo $var2.' - '.gettype($var2).'<br />';
echo $var3.' - '.gettype($var3).'<br />';
echo $var4.' - '.gettype($var4).'<br />';
echo $var5.' - '.gettype($var5).'<br />';
echo $var6.' - '.gettype($var6).'<br />';
echo $var7.' - '.gettype($var7).'<br />';
echo $var8.' - '.gettype($var8).'<br />';
?>