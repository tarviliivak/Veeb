<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 9.01.2018
 * Time: 14:40
 */function manguVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Arva ära arv 1-50:<br />
            <input type="text" name="kasutajaArv">
            <br />
            <input type="submit" value="Kontrolli">
        </form>
    ';
}
function kontrolliArv(){
    $serveriArv = 12;
    if(!empty($_POST)){
        $kasutajaArv = $_POST['kasutajaArv'];
        foreach ($_POST as $voti=>$vaartus){
            if(empty($_POST[$voti])){
                echo 'Arv peab olema sisestatud!<br />';
                exit;
            }
        }
        if($kasutajaArv < $serveriArv){
            echo 'Sinu arv on väiksem kui serveri oma<br />';
        }
        if($kasutajaArv > $serveriArv){
            echo 'Sinu arv on suurem kui serveri oma<br />';
        }
        if(abs($kasutajaArv - $serveriArv) <= 5){
            if($kasutajaArv == $serveriArv){
                echo 'Palju õnne! Arvasid ära!<br />';
                exit;
            }
            echo 'Sinu arv on juba väga lähedal<br />';
        }
    }
}
manguVorm();
kontrolliArv();