<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 23.01.2018
 * Time: 15:23
 */
/*
 * Koosta funktsioon nimega valjastaTabel,
 * mis võtab parameetritena tabeli ridade ja
 * veergude arv ning väljastab vastava suurusega
 * tabel, mille pesad on täidetud
 * juhuarvudega vahemikus 10-99*/
function valjastaTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for ($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td>';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjastaTabel(5, 7);