<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 9.01.2018
 * Time: 11:41
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' => 9
);
echo '<pre />';
print_r($opilane);
echo '<pre />';

echo $opilane['eesnimi'];

echo '<hr />';
foreach ($opilane as $voti=>$vaartus){
    echo $voti. ' - '.$vaartus.'<br />';
}
echo '<hr />';

$opilased = array(
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 15,
        'klass' => 9
    ),
    array(
        'eesnimi' => 'Kadri',
        'perenimi' => 'Kuusk',
        'vanus' => 15,
        'klass' => 9
    ),
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Mets',
        'vanus' => 15,
        'klass' => 9
    )
);
echo '<pre />';
print_r($opilased);
echo '<pre />';

foreach ($opilased as $opilane){
    foreach ($opilane as $element=>$vaartus){
        echo $element. ' - '.$vaartus.'<br />';
    }
    echo '--------------'.'<br />';
}
//Loo funktsioon nimega OtsiRaamat, mille parameetrina on raamatute massiiv
//ja seisun, funktsioon tagastab massiivi,
//kus on raamatud vastava seisundiga(laenutatud või mitte)
//Loo funktsioon nimega raamatuTabel, mis võtab parameetrina massiivi ja väljastab
// tulemused tabelina. Pealkirjas massiivi võtmed.
//
//

function raamatuteTabel($raamatud){
    echo '<table border "1">';
    foreach ($raamatud as $raamat){
        $pealkiri = array_keys($raamat);
        echo '<tr>';
        if (!$pealkiriValjastatud){
            foreach ($pealkiri as $nimetus){
                echo '<th>';
                echo $nimetus;
                echo '</th>';
            }
            echo '</tr>';
            $pealkiriValjastatud = true;
        }
        foreach ($raamat as $element =>$vaartus){
            echo '<td>';
            echo $vaartus;
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}



$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => 'Mina',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);

raamatuteTabel($raamatud);