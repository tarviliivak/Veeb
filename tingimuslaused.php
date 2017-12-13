<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 13.12.2017
 * Time: 8:44
 */
$ilm = 'päike paistab';
if ($ilm == 'sajab') {
    $tuju = 'halb';
} else {
    $tuju = 'hea';
}
echo 'Väljas '.$ilm. '<br />';
echo 'Minul on '.$tuju.' tuju<br />';