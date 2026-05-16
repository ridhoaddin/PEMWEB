<?php
// 1. simpan data di array
$produk = [
    ['kode' => 'A1', 'nama' => 'Apel', 'harga' => 25000],
    ['kode' => 'B1', 'nama' => 'Mangga', 'harga' => 20000],
    ['kode' => 'C1', 'nama' => 'Jeruk', 'harga' => 15000],
];

// 2. menampilkan data produk pakai foreach
echo "<h3>Daftar Produk</h3>";
foreach ($produk as $p) {
    echo "Kode: " . $p['kode'] . "<br>";
    echo "Nama: " . $p['nama'] . "<br>";
    echo "Harga: Rp." . $p['harga'] . "<br><hr>";
}

// 3. fungsi buat total harga
function totalHarga($harga1, $harga2, $harga3) {
    return $harga1 + $harga2 + $harga3;
}

// 4. hitung total belanja
$total = totalHarga(
    $produk[0]['harga'],
    $produk[1]['harga'],
    $produk[2]['harga'],
);
echo "<br/><b>Total Belanja: Rp." . $total . "</b>";

?>  