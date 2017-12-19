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
$elementideArv =count($arvud);
echo 'Massiiv $arvud koosneb '.count($arvud).'elemendist<br />';
$arvud[] = 0;
for($i = 0; $i < count($arvud); $i++){
    echo $arvud[$i].'<br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
echo '<hr />';
//Koosta funktsioon nimega looMassiiv,
//mis võtab parameetrina elementide arvu ja loob juhuarvudest(täisarvud)
//vahemikus 0-99 koosneva masiivi.
//Loodud massiiv tuleb tagastada põhiprogrammile ja kontrollida sisu
//testväljastuse abil
//
//
//
//
function looMassiiv($elementideArv){
    $massiiv = array();
    for ($i = 0; $i < $elementideArv; $i++){
        $juhuarv = rand(0, 99);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
$arvudeMassiiv = looMassiiv(8 );
echo '<pre>';
print_r($arvudeMassiiv);
echo '</pre>';
//Loo funktsioon nimega valjastaMassiiv,
//mis võtab parameetrina masiivi ja
//väljastab tema elemendid
//üherealise tabeli kujul
//väljundi loomisel kasutada foreach tsükkel!
//
//
//
//
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
        echo '<tr>';
            foreach ($massiiv as $element){
                echo '<td>';
                echo $element;
                echo '</td>';

            }
            echo '</tr>';
        echo '</table>';
}
valjastaMassiiv($arvudeMassiiv);