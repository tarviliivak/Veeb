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