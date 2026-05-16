<?php
require 'bank.php';

//ciptakan objek
$n1 = new bank("001122", "Aldo", 1000000);
$n2 = new bank("001123", "Aji", 2500000);
$n3 = new bank("001124", "Mutaz", 3000000);
$n4 = new bank("001125", "Tio", 3500000);

echo '<h3 align="center">' . Bank::BANK . '</h3>';
$n1->cetak();
$n1->setor(500000);
$n1->cetak();

$n2->cetak();
$n2->ambil(250000);
$n2->cetak();

$n3->cetak();
echo 'Jumlah Nasabah : '.Bank::$jml.'orang';

?>