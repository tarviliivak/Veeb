<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 23.01.2018
 * Time: 15:08
 */
// täienda antud lahendus nii, et paaris arvud oleks
// punast värvi ja paaritu arvud
// sinist värvi
$varv = '';
for($arv = 1; $arv <= 10; $arv++){
    if($arv % 2 == 0){
        $varv = 'red';
    } else {
        $varv = 'blue';
    }
    echo '<p style="color: '.$varv.';">'.$arv.'</p>';
}
$kord = 1;
while($kord <= 5){
    echo '<i>'.$kord++.'</i>';
}