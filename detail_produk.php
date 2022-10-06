<!DOCTYPE html>
<html>
<head>
    <title>Tugas2</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 10;
  font-family:"convergence", sans-serif;
  display: grid;
}
.header {
  background-color: #4af46c;
  padding: 20px;
  text-align: center;
}
.box {
  background-color: lightgrey;
  border: 15px solid #4af46c;
  padding: 50px;
}

</style>
</head>
<body>
<?php

    $nama_produk        = $_GET['nama_produk'];
    $harga_produk       = $_GET['harga_produk'];
    $stok_produk        = $_GET['stok_produk'];
    $deskripsi_produk   = $_GET['deskripsi_produk'];
    $gambar_produk      = $_GET['gambar_produk'];

?>
<div class="header">
  <h1>Detail Produk</h1>
</div>

<div class="box">
    <form action="detail_produk.php" method="get">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td>:</td>
                <td><?php echo $nama_produk; ?></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><?php echo $harga_produk; ?></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><?php echo $stok_produk; ?></td>
            </tr>
            <tr>
                <td>Deskripsi Produk</td>
                <td>:</td>
                <td><?php echo $deskripsi_produk; ?></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><img id="imageProduct" src="" width="200" alt=""></td>
            </tr>
        </table>
    </form>
</div>
<script>
    document.querySelector("#imageProduct").src = localStorage.getItem('localImage')
</script>
</body>
</html>
