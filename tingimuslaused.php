<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 13.12.2017
 * Time: 8:44
 */
header('Refresh: 2');
$ilm = 'päike paistab';
if ($ilm == 'sajab') {
    $tuju = 'halb';
} else {
    $tuju = 'hea';
}
echo 'Väljas '.$ilm. '<br />';
echo 'Minul on '.$tuju.' tuju<br />';
//
$ilm = 'sajab'
$tuju = ($ilm == 'sajab')? 'halb' : 'hea';
echo 'Väljas '.$ilm. '<br />';
echo 'Minul on '.$tuju.' tuju<br />';
//

$vanus = rand(0, 100);
if ($vanus >= 0 and $vanus < 11){
    $staatus = 'laps';
} elseif ($vanus > 10 and $vanus < 18){
    $staatus = 'nooruk';
} elseif ($vanus > 17 and $vanus < 65){
    $staatus = 'täiskasvanu';
} else {
    $staatus = 'seenior';
}

echo 'Oled '.$vanus.' aastat vana.<br />';
echo 'Oled '.$staatus.'<br />';