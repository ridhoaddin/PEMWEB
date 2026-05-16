<?php
class Produk
{
    //member1 variabel
    private $koneksi;
    //member2 konstruktor
    public function __construct()
    {
        global $dbh; //memanggil variabel di file lain
        $this->koneksi = $dbh;
    }
    //member3 fungsionalitas CRUD
    public function index()
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.id_jenis
                ORDER BY produk.id DESC";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }

    public function simpan($data)
    {
        $sql = "INSERT INTO produk (kode,nama,kondisi,harga,stok,id_jenis,foto)
                VALUES (?,?,?,?,?,?,?)";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function getProduk($id)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.id_jenis WHERE produk.id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
        $rs = $ps->fetch();
        return $rs;
    }

    public function ubah($data)
    {
        $sql = "UPDATE produk SET kode=?,nama=?,kondisi=?,harga=?,stok=?,id_jenis=?,foto=? 
                WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute($data);
    }

    public function hapus($id)
    {
        $sql = "DELETE FROM produk WHERE id = ?";
        //PDO prepare statement
        $ps = $this->koneksi->prepare($sql);
        $ps->execute([$id]);
    }

    public function cari($keyword)
    {
        $sql = "SELECT produk.*, jenis.nama AS kategori
                FROM produk INNER JOIN jenis
                ON jenis.id = produk.id_jenis
                WHERE produk.nama LIKE '%$keyword%' 
                OR jenis.nama LIKE '%$keyword%' 
                OR produk.kondisi LIKE '%$keyword%'";
        $rs = $this->koneksi->query($sql);
        return $rs;
    }
}