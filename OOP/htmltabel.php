<?php
/**
 * Created by PhpStorm.
 * User: tarvi.liivak
 * Date: 17.01.2018
 * Time: 12:41
 */
require_once 'tabel.php';
class htmlTabel extends tabel
{
    var $taustaVarv = '';
    /**
     * @param string $taustaVarv
     */
    public function setTaustaVarv($taustaVarv)
    {
        $this->taustaVarv = $taustaVarv;
    }
    public function __construct($pealkirjad, $taustaVarv='')
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }
    function prindiTabel()
    {
        echo '<table border="1">';
        // pealkiri
        echo '<tr bgcolor="'.$this->taustaVarv.'">';
        foreach ($this->pealkirjad as $pealkiri){
            echo '<th>'.$pealkiri.'</th>';
        }
        echo '</tr>';
        // sisu
        foreach ($this->tabelisisu as $tabeliRida){
            echo '<tr bgcolor="'.$this->taustaVarv.'">';
            foreach ($tabeliRida as $element){
                echo '<td>'.$element.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}







