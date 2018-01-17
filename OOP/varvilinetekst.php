<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 17.01.2018
 * Time: 11:08
 */

require_once 'tekst.php';
class varvilinetekst extends tekst
{
 // klassi omadus ehk muutuja
    var $tekstiVarv = '';

    public function __construct($sonad = '', $varv = '')
    {
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }


    function maaraVarv($varv){
        $this->tekstiVarv = $varv;

    }
    function prindiTekst()
    {
        if($this->tekstiVarv == ''){
            parent::prindiTekst();

        } else {
            echo '<font color="'.$this->tekstiVarv.'">'.$this->sonad.'</font><br />';
        }
    }
    }
