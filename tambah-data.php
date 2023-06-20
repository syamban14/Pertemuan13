<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    echo $_GET['pesan'];
    ?>
    <h1>Form Tambah Data</h1>
    <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
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
        <label for="">Gambar</label>
        <input type="file" name="gambar" id="" onchange="upload(this);">
        <div style="width: 100px;">
            <img id="image" width="100%" height="165px">
        </div>
        <br>
        <input type="submit" value="Simpan">
    </form>

    <script>
        function upload(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body>

</html>