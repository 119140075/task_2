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

<div class="header">
  <h1>Input Produk</h1>
</div>

<div class="box">
    <form action="detail_produk.php" method="get">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga_produk"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="number" name="stok_produk"></td>
            </tr>
            <tr>
                <td>Deskripsi Produk</td>
                <td><input type="text" name="deskripsi_produk"></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>
                    <input type="file" id="inputImage" name="gambar_produk">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="kirim" value="Kirim"></td>
            </tr>
        </table>
    </form>
</div>
<script>
    function readFile(){
        const FR = new FileReader();
        FR.addEventListener("load", function(evt){
            localStorage.setItem("localImage", evt.target.result)
        });
        FR.readAsDataURL(this.files[0]);
    }
    document.querySelector("#inputImage").addEventListener("change", readFile);
</script>
</body>
</html>


