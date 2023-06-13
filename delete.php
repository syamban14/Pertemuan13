<?php
include '../Pertemuan9/koneksi.php';

$kode = $_GET['kode'];

$sql = "DELETE FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);

if ($query) {
    header('Location: tampil-data.php?pesan=delete');
} else {
    echo "Data gagal dihapus";
}
