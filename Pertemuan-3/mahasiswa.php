<?php
require_once 'person.php';
class Mahasiswa extends Person{
    //Atribut
    public $semester;
    public $jurusan;

    public function __construct($nama, $gender, $semester, $grlar){
        parent::__construct($nama, $gender);
        $this->semester = $semester;
        $this->jurusan = $jurusan;
    }

    public function cetak(){
        patrent::cetak();
        echo "<br/>semester : " . $this->semester;
        echo "<br/>jurusan : " . $this->jurusan;
        echo "<hr/>";
    }
}


?>