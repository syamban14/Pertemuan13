<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo $_GET['pesan'];
    ?>
    <h1>Form Tambah Data</h1>
    <form action="proses-tambah.php" method="post">
        <label for="kode">Kode Barang :</label>
        <input type="text" name="kode" id="kode">
        <br>
        <label for="">Nama Barang :</label>
        <input type="text" name="nama" id="">
        <br>
        <label for="">Harga :</label>
        <input type="text" name="harga" id="">
        <br>
        <label for="">Stok :</label>
        <input type="text" name="stok" id="">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>

</html>