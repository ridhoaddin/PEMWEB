<!--void-->
<?php
function salam(){
    echo "Sealmat Pagi";
}
salam();
echo '<br/>';
?>
<!--return-->
<?php
function tambah($a, $b){
    return $a + $b;
}
$hasil = tambah(2, 5);
echo $hasil;
?>