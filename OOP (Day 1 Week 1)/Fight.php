<?php

trait Fight
{
    public $atkPower;
    public $defPower;

    public function serang($enemy)
    {
        echo 'BATTLE PHASE (SERANGAN DARI '.$this->nama.')';
        echo '<br>== == == == == == == <br>';
        $dmg = $this->atkPower;
        echo $this->nama.' Menyerang dengan '.$this->keahlian.' Damage ('.$dmg.')';
        echo '<br>';
        echo $enemy->nama.' Memiliki defence sebesar '.$enemy->defPower;
        echo '<br>';
        
        $calc = $dmg / $enemy->defPower;
        echo 'Total damage dari serangan '.$this->nama.' adalah '.$calc;
        echo '<br>';

        $res = $enemy->darah - $calc;

        $enemy->darah = $res;
        echo 'Darah '.$enemy->nama.' Tersisa '.$enemy->darah;
        echo '<br>== == == == == == == <br><br>';
    }
    
    public function diserang($enemy)
    {
        echo 'BATTLE PHASE (SERANGAN DARI '.$enemy->nama.')';
        echo '<br>== == == == == == == <br>';
        $dmg = $enemy->atkPower;
        echo $this->nama.' Diserang dengan '.$enemy->keahlian.' Damage ('.$dmg.')';
        echo '<br>';
        echo $this->nama.' Memiliki defence sebesar '.$this->defPower;
        echo '<br>';

        $calc = $dmg / $this->defPower;
        echo 'Total damage dari serangan '.$enemy->nama.' adalah '.$calc;
        echo '<br>';

        $res = $this->darah - $calc;

        $this->darah = $res;
        echo 'Darah '.$this->nama.' Tersisa '.$this->darah;
        echo '<br>== == == == == == == <br>';
    }
}
