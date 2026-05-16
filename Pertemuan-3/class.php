<?php

class MOtor{
    //Atribut
    public $merk;
    public $warna;
    public $thn;

    //Method
    public function__construct($merk, $warna, $thn){
        $this->merk = $merk;
        $this->warna = $warna;
        $this->thn = $thn;
    }
}

$mbl1 = new Motor("Supra", "Merah", "2009") ;

//$mbl2 = new Motor("Ninja", "Hitam", "2010");

var_dump($mbl1);
//var_dump($mbl2);

?>