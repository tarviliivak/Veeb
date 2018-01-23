<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 23.01.2018
 * Time: 16:21
 */
date_default_timezone_set('Europe/Tallinn');
$aegHetkel = time();
$kellaaeg = date('G:i', $aegHetkel);
echo $kellaaeg.'<br />';
$kuupaev = date('j.m.Y');
echo $kuupaev.'<br />';
/*
 * Loo funktsioon nimega vorm, mis väljastab vormi
 * Vormi kaudu kasutajal on võimalus sisestada
 * oma eesnimi, perenimi, sünnikuupäev -
 * selle sisestamiseks valmista eraldi input elemendid
 * päeva, kuu ja aasta jaoks
 * Lisaks olemas nupp, mis need andmed saadab serverile
 *
 * Loo funktsioon nimega ajaTootlus, mis
 * võtab parameetritena kasutaja sünni päeva, kuu ja
 * aasta ja loob nende põhjal andmebaasi DATE formaadiks
 * sobilik väärtus
 *
 * Kontrollimiseks väljasta saadud väärtus
 * */