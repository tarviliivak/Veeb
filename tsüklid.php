<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 15.12.2017
 * Time: 10:29
 */
$varv = '';
for($arv = 1; $arv <= 10; $arv++){
    if ($arv % 2 == 0){
        $varv = 'red';
    }  else {
        $varv = 'blue';
    }
    echo '<p style="color: '.$varv.' ">'.$arv.'<br />';
}
//täienda antud lahendust nii, et paaris arvud oleksid punased ja paaritud arvud sinised


$ kord = 1;
while ($kord <= 5){
    echo '<1>'.$kord++.'<1>';
}