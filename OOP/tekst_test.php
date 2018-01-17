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
// määrame kindlad sõnad tekstis
$minuTekst = new tekst('Tere Maailm!');
// väljastame objekti sisu kujul
echo '<pre>';
print_r($minutekst);
echo '</pre>';
$minuTekst->prindiTekst();

echo '<hr />';

require_once 'varvilinetekst.php';
// loome tektsi objekti
$minutekst = new tekst();
// määrame kindlad sõnad tekstis
$varvitutekst = new varvilinetekst('Varvitu tekst!');
// väljastame objekti sisu kujul
echo '<pre>';
print_r($minutekst);
echo '</pre>';
$varvitutekst->prindiTekst();