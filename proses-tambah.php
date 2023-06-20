<?php
include '../Pertemuan9/koneksi.php';

$kode = htmlspecialchars($_POST['kode']);
$nama = htmlspecialchars($_POST['nama']);
$harga = htmlspecialchars($_POST['harga']);
$stok = htmlspecialchars($_POST['stok']);

$namaFile = $_FILES['gambar']['name'];
$ukuranFile = $_FILES['gambar']['size'];
$extAllow = ['jpg', 'jpeg', 'png'];
$validExt = explode(".", $namaFile);
$Extvalid = strtolower(end($validExt));
$tmpName = $_FILES['gambar']['tmp_name'];

// cek kondisi ukursan file
if ($ukuranFile <= 2000000) {
    // cek kondisi validasi dari extension
    if (in_array($Extvalid, $extAllow)) {
        echo 'Extension ada';
    }
} else {
    echo "salah";
}
die();



$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$row = mysqli_num_rows($query);
if ($row > 0) {
    header("Location: tambah-data.php?pesan=Kode $baris[kode_barang] Sudah Ada");
} else {
    $sql_insert = "INSERT INTO barang VALUES('$kode','$nama','$harga','$stok')";
    $query_insert = mysqli_query($koneksi, $sql_insert);

    if ($query_insert) {
        header('Location:tampil-data.php?pesan=tambah');
    } else {
        echo "Data Gagal Disimpan";
        header('Location:tambah-data.php');
    }
}
