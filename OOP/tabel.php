<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 15.01.2018
 * Time: 15:07
 */

class tabel
{
    // klassi muutujas
    var $pealkirjad = array();
    var $tabelisisu = array();
    var $veergudearv;

    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad){
        $this->pealkirjad = $pealkirjad;
        $this->veergudearv = count($pealkirjad);

    } function lisaRida($rida){
        if (count($rida) != $this->veergudearv) {
            return false;
        }
    array_push($this->tabelisisu, $rida);
    return true;
    }



}