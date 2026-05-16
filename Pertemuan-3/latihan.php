<?php
class persegi{
    //Atribut
    public $sisi;
    public $luas;
    public $keliling;

    //Method
    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function hitungLuas(){
        return $this->sisi * $this->sisi;
    }

    public function hitungKeliling(){
        return 4 * $this->sisi;
    }
}

$persegi = new persegi(4);

echo "Persegi dengan sisi : " . $persegi->sisi . "\n";
echo "Memiliki luas : " . $persegi->hitungLuas() . "\n";
echo "Memiliki keliling : " . $persegi->hitungKeliling() . "\n";

?>