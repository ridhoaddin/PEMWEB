<?php
require "dosen.php";
require "mahasiswa.php";

//buat objek
$d1 = new dosen('Adi', 'L', '111', 'S.Kom', 'M.Kom');
$d2 = new dosen('Udai', 'L', '112', 'S.T', 'M.T');
$m1 = new Mahasiswa('Budi', 'L', '4', 'Teknik Informatika');
$m2 = new Mahasiswa('Cika', 'P', '2', 'Sistem Informasi');

$data = [$d1, $d2, $m1, $m2];

echo "<h3>Data Civitas Kampus</h3>";
echo "<p";
foreach ($data as $d) {
    echo $d->cetak();
}

?>