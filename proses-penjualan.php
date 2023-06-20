<?php
include '../Pertemuan9/koneksi.php';

$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO penjualan VALUES (NULL, '$kode', '$jumlah',now())";
mysqli_query($koneksi, $sql);
// $sql = "CREATE TRIGGER `update_barang` BEFORE INSERT ON `penjualan` FOR EACH ROW BEGIN UPDATE barang SET stok_barang = stok_barang - new.$jumlah WHERE kode_barang = new.$kode END";

// mysqli_query($koneksi, $sql);
