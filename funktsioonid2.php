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
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){


$number = rand(0,1000);
echo 'Numbri '.$number.' arvude summa on '.arvusumma($number).'<br />';
}

//Koostada funktsioon nimega otsinumber,
//mis võtab parameetrina suvalise arvu ja
//kindlaks määratud arvu ja arvutab mitu korda määratud
//arv esineb suvalises numbris, näiteks arv 5
//esineb numbris 442158755745 neli korda
//lahendamiseks ei tohi kasutada sõnetöötluse võimalusi
//ja massiivtöötluse vahendeid
//tulemus koos seletava tekstiga

function otsi_arv($suvalinearv, $kindelarv){
        $mitukorda = 0;
    while ($suvalinearv != 0){
        $arv = $suvalinearv % 10;
       if ($arv == $kindelarv){
           $mitukorda++;
       }
       $suvalinearv = $suvalinearv /10;
       settype($suvalinearv, 'integer');
    }
echo ''.$mitukorda.'arv korda<br />';
}
otsi_arv(5645554564564,5);