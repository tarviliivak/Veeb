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
// Väljastame tabeli teksti kuju
$minuTabel->prindiTabel();