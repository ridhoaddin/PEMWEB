<?php
class person{
    //Atribut
    public $nama;
    public $gender;


    //constructor
    public function __construct($nama, $gender){
        $this->nama = $nama;
        $this->gender = $gender;
    }


    //method cetak
    public function cetak(){
        echo "Nama : " . $this->nama . "<br/>";
        echo "<br/>Jenis Kelamin : " . $this->gender;
    }
}

?>