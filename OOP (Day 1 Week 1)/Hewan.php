<?php
require_once('Fight.php');


class Hewan
{
    public $nama;
    public $darah = 50;
    public $kaki;
    public $keahlian;

    use Fight;

    public function __construct($nama, $kaki, $keahlian, $atk, $def)
    {
        $this->nama = $nama;
        $this->kaki = $kaki;
        $this->keahlian = $keahlian;

        $this->atkPower = $atk;
        $this->defPower = $def;
    }
    public function get_darah()
    {
        return $this->darah;
    }

    public function set_darah($darah_current)
    {
        $this->darah = $darah_current;
    }

    public function get_nama()
    {
        return $this->nama;
    }

    public function get_keahlian()
    {
        return $this->keahlian;
    }

    public function atraksi()
    {
        echo $this->nama." sedang ".$this->keahlian;
    }
}
