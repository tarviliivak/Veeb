<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 15.01.2018
 * Time: 14:27
 */
require_once 'tekst.php';
// loome tektsi objekti
$minutekst = new tekst();
// väljastame objekti sisu kujul
echo '<pre>';
print_r($minutekst);
echo '</pre>';