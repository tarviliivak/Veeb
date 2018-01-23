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
echo '<pre>';
print_r($opilane);
echo '</pre>';
echo $opilane['eesnimi'];
echo '<hr />';
foreach ($opilane as $voti=>$vaartus){
    echo $voti.' - '.$vaartus.'<br />';
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
        'perenimi' => 'Tamm',
        'vanus' => 16,
        'klass' => 10
    ),
    array(
        'eesnimi' => 'Kadi',
        'perenimi' => 'Kuusk',
        'vanus' => 15,
        'klass' => 9
    )
);
echo '<pre>';
print_r($opilased);
echo '</pre>';
foreach ($opilased as $opilane){
    foreach ($opilane as $element=>$vaartus){
        echo $element.' - '.$vaartus.'<br />';
    }
    echo '--------------'.'<br />';
}
//
//
