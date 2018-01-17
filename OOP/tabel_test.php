<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 15.01.2018
 * Time: 15:15
 */
require_once 'tabel.php';
// loome tabeli objekti
$minuTabel = new  tabel(array('a', 'b', 'c', 'd'));
//väljastame tabeli objekti test kujul
//
$minuTabel->lisaRida(array(1, 2 , 3, 4 ));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1,'c'=> 2 ,'b'=> 3,'a'=> 4 ));
$minuTabel->lisaRida(array(5, 6 , 7, 8 ));
//
echo '<pre>';
print_r($minuTabel);
echo '<pre>';
//Väljastame tabeli teksti kuju
$minuTabel->prindiTabel();

//Laienda tabel klass html tabeli loomiseks
//Katsetamiseks määra antud klassi omadusteks
//tabeli pesade tausta värv
//mõtle milliseid meetodeid on vaja üles kirjutada
//et oleks võimalik html kujul tabel väljastada
//

require_once 'tabel.php';
// loome tabeli objekti
$minuTabel = new tabel(array('a', 'b', 'c', 'd'));
// lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
// väljastame tabeli tekst kujul
$minuTabel->prindiTabel();
require_once 'htmltabel.php';
// loome tabeli objekti
$htmlTabel = new htmltabel(array('a', 'b', 'c', 'd'), '#ff0066');
// lisame read juurde
$htmlTabel->lisaRida(array(1, 2, 3, 4));
$htmlTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$htmlTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($htmltabel);
echo '</pre>';
// väljastame tabeli tekst kujul
$htmlTabel->prindiTabel();