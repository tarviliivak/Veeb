<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 9.01.2018
 * Time: 13:30
 */
function valjastavorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Kasutaja: <input type="text" name="kasutaja">
            <br />
            Parool: <input type="password" name="parool">
            <br />
            <input type="submit" value="Saada">
        </form>
    ';

}
//
/*function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    print_r($_GET);
    print_r($_REQUEST);
    print_r($_SERVER);
    echo '</pre>';
}*/
//
function vormiAndmed(){
//    $kasutaja = $_POST['kasutaja'];
//    $parool = $_POST['parool'];
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    if(!empty($_POST)){
        extract($_POST);
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Andmed peavad olema sisestatud!<br />';
                exit;
            }
        }
        echo 'Tere, '.$kasutaja.'<br />';
        echo 'Sinu parooliks on '.$parool.'<br />';
    }
}
valjastaVorm();
vormiAndmed();

/*
 * Koosta mäng, kus kasutaja saab ära arvata programmis mõeldud täisarvu ühest viiekümneni. Alustuseks ära
 * genereeri arv vaid pane ise paika - lihtsam ka testimine
 *
 * Vale arvu sisestamisel antakse kasutajale vihje, kas
 * serveri poolt valitud arv on suurem või väiksem
 * kasutaja sisestatud arvust.
 *
 * Täienda programmi selliselt, et kui õige vastuse ja
 * kasutaja sisestatud arvu vahe on väiksem
 * või võrdne 5-ga, siis teavitatakse kasutajat, et ta on
 * õigele vastusele juba üsna lähedale jõudnud.
 *
 * Täineda programmi selliselt, et on kirjas, mitu katset
 * on sooritatud õige arvu leidmisel.
 * */

function valjastaVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Kasutaja: <input type="text" name="kasutaja">
            <br />
            Parool: <input type="password" name="parool">
            <br />
            <input type="submit" value="Saada">
        </form>
    ';
}
function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    print_r($_GET);
    print_r($_REQUEST);
    print_r($_SERVER);
    echo '</pre>';
}
valjastaVorm();
vormiAndmed();
            }
        }
        echo 'Tere, '.$kasutaja.'<br />';
        echo 'Sinu parooliks on '.$parool.'<br />';
    }
}
valjastaVorm();
vormiAndmed();