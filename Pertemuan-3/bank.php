<?php

class bank{
    //Atribut
    Protected $norek;
    public $nama;
    private $saldo;

    static $jml = 0;
    const BANK = 'Bank Syariah Nurul Fikri';

    //constructor
    public function __construct($norek , $nasabah, $saldo)
    {
        $this->norek = $norek;
        $this->nama = $nasabah;
        $this->saldo = $saldo;
        self::$jml++;
    }

    public function setor($uang){
        $this->saldo += $uang;
    }

    public function ambil($uang){
        $this->saldo -= $uang;
    }

    public function cetak(){
        echo "<b><u>". self::BANK. "</u></b>";
        echo "<br/>No. Rekening  ".$this->norek."</u></b>";
        echo "<br/>Nama Nasabah  ".$this->nama."</u></b>";
        echo "<br/>Saldo : Rp ". number_format($this->saldo, 0, ',', '.') . "</u></b>";
        echo "<hr/>";

    }
}

?>