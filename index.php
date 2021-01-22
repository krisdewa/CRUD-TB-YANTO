<?php
    include_once("connectdb.php");
    login();
    
    $sql_get = "SELECT * FROM stokpenjualan";
    $query_stokpenjualan = mysqli_query($koneksi, $sql_get);

    $results = [];

    while($row = mysqli_fetch_assoc($query_stokpenjualan)) {
        $results[] = $row;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEM MANAJEMEN BARANG - Penjualan </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body id="page-top">
    <!-- NAVIGASI BAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">YANTO MATERIAL</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <ul class="navbar-nav justify-content-end">
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

    <!-- HEADER -->
    <header class="bg-secondary text-black">
        <div class="container text-center">
            <br><br>
            <h1 class="display-3 text-center text-light"> SISTEM MANAJEMEN</h1>
            <p class="text-light">TOKO BANGUNAN PAK YANTO</p>
            <br>
        </div>
    </header>

    <div class="bg-light">
    <div class="container-fluid"><br>
        <!-- MENAMPILKAN DATABASE STOK PENJUALAN -->
        <table class="table table-light table-striped table-hover">
            <thead class="table-secondary table-bordered border-default">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID BARANG</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">HARGA BELI</th>
                    <th scope="col">HARGA JUAL</th>
                    <th scope="col">STOK</th>
                    <th scope="col">NAMA SUPPLIER</th>
                    <th scope="col">OPSI</th>
                </tr>
            </thead>

            <!-- NO URUT BARANG -->
            <?php
            $no =1;
            foreach($results as $result) :
            ?>

            <tbody class="table-orange table-bordered border-dark">
                <tr>
                    <td> <?= $no ?></td>
                    <td> <?= $result['id_barang'] ?></td>
                    <td> <?= $result['nama_barang'] ?></td>
                    <td>Rp. <?= $result['harga_beli'] ?></td>
                    <td>Rp. <?= $result['harga_jual'] ?></td>
                    <td> <?= $result['stok'] ?></td>
                    <td> <?= $result['nama_supplier'] ?></td>
                    <td>
                        <a class="btn btn-warning " href="edit.php?id_barang=<?=$result['id_barang'];?>"><i class="bi bi-pencil"></i></a>
                        <a class="btn btn-danger " href="hapusbarang.php?id_barang=<?=$result['id_barang'];?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
            </tbody>
            
            <!-- NO URUT BARANG -->
            <?php
            $no++;
            endforeach;
            ?>
        </table><br>
        <div class="d-grid gap-2 col-2 mx-auto">
            <a class="btn btn-primary" href="tambah.php"><i class="bi bi-plus-square"></i> Tambah Barang </a>
        </div>
        <br><br><br>
    </div>        
    </div>
    
    <!-- FOOTER INDEX -->
    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <div class="container p-2">
        <div class="text-center text-light p-2">
            © 2021 Copyright <a class="text-light" href="https://krisdewa.github.io/" target="_blank">KrisDewa</a>
        </div>
        </div>
    </footer>
</body>
</html>
