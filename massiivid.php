<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 19.12.2017
 * Time: 8:44
 */
$arvud = array(5, 4, 3, 2, 1);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr />';
$elementideArv = count($arvud);
echo 'Massiiv $arvud koosneb '.$elementideArv.' elemendist<br />';
$arvud[] = 0;
echo 'Massiiv $arvud koosneb '.count($arvud).' elemendist<br />';
for($i = 0; $i < count($arvud); $i++){
    echo $arvud[$i].'<br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
echo '<hr />';
/*
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 0-99 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil
 * */
function looMassiiv($elementideArv){
    $massiiv = array();
    for($i = 0; $i < $elementideArv; $i++){
        $juhuarv = rand(0, 99);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(8);
echo '<pre>';
print_r($arvudeMassiiv);
echo '</pre>';}