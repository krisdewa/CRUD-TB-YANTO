<?php   
    require_once("connectdb.php");
    login();
    
    if(isset($_POST['submit'])) {
        $id_barang = $_POST['id_barang'];
        $nama_barang = $_POST['nama_barang'];
        $harga_beli = $_POST['harga_beli'];
        $harga_jual = $_POST['harga_jual'];
        $stok = $_POST['stok'];
        $nama_supplier = $_POST['nama_supplier'];

        $sql_insert = "INSERT INTO stokpenjualan VALUES('$id_barang', '$nama_barang', '$harga_beli', '$harga_jual', '$stok', '$nama_supplier')";
        mysqli_query($koneksi, $sql_insert);

        header("Location:index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEM MANAJEMEN BARANG - Tambah Barang </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <!-- NAVIGASI BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">YANTO MATERIAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="Pembelian.php">Pembelian</a>
                    </li>   
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="logpembelian.php">HistoryPembelian</a>
                    </li>           
                    <li class="nav-item"><a class="nav-link" aria-current="page""></a></li>   
                    <li class="nav-item"><a class="nav-link" aria-current="page""></a></li>
                   
                    <li class="nav-item">
                        <a class="btn btn-danger btn-xs" href="logout.php" role="button"><i class="bi bi-box-arrow-right"></i> LogOut</a>
                    </li>
                </ul>    
    </nav><br><br>
    <!-- TAMBAH DATA -->
    <div class="container-sm">
        <br>
        <h1 class="display-5">TAMBAH BARANG</h1>
        <p>Silahkan masukkan barang ke form dibawah ini</p>
        <hr>
        <form action="tambah.php" method="POST">
            <table>
                <br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">ID Barang</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="id_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Beli</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga_beli">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Harga Jual</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="harga_jual">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Stok</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="stok">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama Supplier</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_supplier">
                    </div>
                </div>

            </table><br>
            <button class="btn btn-primary" name="submit" type="submit">Tambah Barang</button>
            <a href="index.php" class="btn btn-warning">Cancel</a>
        </form>
    </div>
    <!-- FOOTER -->
    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <div class="container p-2">
            <div class="text-center text-light p-2">
                © 2021 Copyright <a class="text-light" href="https://krisdewa.github.io/" target="_blank">KrisDewa</a>
            </div>
        </div>
    </footer>

</body>
</html>