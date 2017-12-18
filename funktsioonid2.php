<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 18.12.2017
 * Time: 14:11
 */
//Koostada funktsioon nimega arvusumma, mis võtab parameetrina
//suvalise numbri ja arvutab
//numbri arvude summa - juhul kui on argumendina
//funktsioonile antud number 123, siis programm peab leidma 1+2+3 summa, ehk 6
//Ei tohi kasutada sõnetöötluse võimalusi
//Funktsioon peab tagastama leitud summa põhiprogrammile
//Põhiprogrammis peab kasutama väljatrükis tagastatud väärtus koos selgitava tekstiga

function arvusumma($number){
    $summa = 0;
    while ($number != 0){
        $arv = $number % 10;
       $summa = $summa + $arv;
        $number = $number / 10;
         settype($number, 'integer');
         echo 'number = '.$number.'<br />';
    }
    return $summa;
}
$number = 123;
echo 'Numbri '.$number.' arvude summa on '.arvusumma($number).'<br />';