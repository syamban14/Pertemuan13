<?php
include '../Pertemuan9/koneksi.php';

if (!isset($_GET['kode'])) {
    header('Location: tampil-data.php');
}

$kode = $_GET['kode'];

$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$kode = $baris[0]; // kode barang
$nama = $baris[1]; // nama barang
$harga = $baris[2]; // harga barang
$stok = $baris[3]; // stok barang
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Form Tambah Data</h1>
    <form action="update.php" method="post">
        <label for="kode">Kode Barang :</label>
        <input type="text" name="kode" id="kode" value="<?= $kode ?>">
        <br>
        <label for="">Nama Barang :</label>
        <input type="text" name="nama" id="" value="<?= $nama ?>">
        <br>
        <label for="">Harga :</label>
        <input type="text" name="harga" id="" value="<?= $harga ?>">
        <br>
        <label for="">Stok :</label>
        <input type="text" name="stok" id="" value="<?= $stok ?>">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>