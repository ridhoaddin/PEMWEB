<?php
//data awal
$nama = 'Anton';
$totalBelanja = 15000;
$nilai = 85;

//if else (total belanja)
if($totalBelanja > 100000){
    $ketBelanja = "Selamat $nama, Anda mendapatkan hadian!";
} else {
    $ketBelanja = "Terima Kasih $nama telah berbelanja di toko kami";
}

//ternary (kelulusan)
$ketLulus = ($nilai >=75) ? "Lulus" : "Tidak Lulus";

//if multi kondisi (grade)
if ($nilai >=85 && $nilai <=100){
    $grade = "A";
} elseif ($nilai >=75 && $nilai <85){
    $grade = "B";
} elseif ($nilai >=60 && $nilai <70){
    $grade = "C";
} elseif ($nilai >=50 && $nilai <60){
    $grade = "D";
} elseif ($nilai >=30 && $nilai <50){
    $grade = "E";
} else {
    $grade = "-";
}

//switch case (predikat)
switch ($grade) {
    case 'A':
        $predikat = 'Memuaskan';
        break;
    case 'B':
        $predikat = 'Bagus';
        break;
    case 'C':
        $predikat = 'Cukup';
        break;
    case 'D':
        $predikat = 'Kurang';
        break;
    case 'E':
        $predikat = 'Buruk';
        break;
    default:
        $predikat = '-';
}

?>

<h3>Data Belanja</h3>
Nama Pelanggan: <?= $nama ?><br>
Total Belanja: Rp.<?= $totalBelanja ?><br>
Keterangan: <?= $ketBelanja ?>

<h3>Data Nilai</h3>
Nama Siswa: <?= $nama ?><br>
Nilai: <?= $nilai ?><br>
Status: <?= $ketLulus ?> <br>
Grade: <?= $grade ?> <br>
Predikat: <?= $predikat ?> <br>