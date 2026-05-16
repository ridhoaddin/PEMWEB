<?php
//variabel bawaan PHP
echo 'Dokumen php saya ada di: '.$_SERVER['DOCUMENT_ROOT'];
echo '<br>Nama file ini: '.$_SERVER['SCRIPT_FILENAME'];
echo '<hr>';

//variabel konstanta
$jari2 = 15;
define('PI', 3.14);
$luas_lingkaran = PI * $jari2 * $jari2;
echo "Luas lingkaran dengan jari-jari $jari2 = $luas";
echo '<hr>';

//bikin variabel
$nama_siswa = 'Budi Santoso';
$umur = 17;
$berat_badan= 60.5;

//cetak dengan concate
echo 'Nama Siswa: '.$nama_siswa. '<br>';
?>

<ul>
    <li>Nama Siswa: <?php echo $nama_siswa ?></li>
    <li>Umur: <?php echo $umur ?> tahun</li>
    <li>Berat Badan: <?php echo $berat_badan ?> kg</li>
</ul>