<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 23.01.2018
 * Time: 15:27
 */* Koosta funktsioon nimega valjastaTabel,
 * mis võtab parameetritena tabeli ridade ja
* veergude arv ning väljastab vastava suurusega
* tabel, mille pesad on täidetud
* juhuarvudega vahemikus 10-99*/
/*
 * Loo funktsioon genereeriVarv mis genereerib ja tagastab
 * põhiprogrammile genereeritud värv kujul #XXXXXX
 * Vihje: kasuta tsüklis loodud kood ja teisenda see
 * funktsiooniks
 * */
/*
 * Rakenda loodud funktsioon iga pesa värvimiseks
 * */
function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuTaisarv = rand(0, 15);
        $juhuHex = dechex($juhuTaisarv);
        $varv = $varv.$juhuHex;
    }
    return $varv;
}
function valjastaTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td style="background-color: '.genereeriVarv().';">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjastaTabel(5, 7);