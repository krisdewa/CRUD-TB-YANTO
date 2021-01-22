<?php
    require_once("connectdb.php");
    login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEM MANAJEMEN BARANG - Pembelian </title>
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
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Penjualan</a>
                    </li>
                    <li class="nav-item active">
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

    <!-- PENJUALAN -->
    <?php
        require_once("connectdb.php");

        $sql_get = "SELECT * FROM stokpenjualan";
        $query_stokpenjualan = mysqli_query($koneksi, $sql_get);
        $resultspenjualan = [];

        while($row = mysqli_fetch_assoc($query_stokpenjualan)) {
            $resultspenjualan[] = $row;
        }
    ?>
    <header class="text-dark bg-light">
        
    </header>

    <div class="bg-light">
        <div class="container-fluid"><br>
            <h1 class="display-5 text-dark"> BARANG </h1>
            <p>Barang yang tersedia</p>
            <hr>
        </div>
    <div class="container-fluid"><br>
        <table class="table table-light table-striped table-hover">
            <thead class="table-secondary table-bordered border-default">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID BARANG</th>
                    <th scope="col">NAMA BARANG</th>
                    <th scope="col">HARGA BARANG</th>
                    <th scope="col">JUMLAH BARANG READY</th>
                </tr>
            </thead>
            <!-- NO URUT BARANG -->
            <?php
            $no =1;
            foreach($resultspenjualan as $resultspenjualan) :
            ?>
            <tbody class="table-orange table-bordered border-dark">
                <tr>
                    <td> <?= $no ?></td>
                    <td> <?= $resultspenjualan['id_barang'] ?></td>
                    <td> <?= $resultspenjualan['nama_barang'] ?></td>
                    <td>Rp. <?= $resultspenjualan['harga_jual'] ?></td>
                    <td><?= $resultspenjualan['stok'] ?></td>
                </tr>
            </tbody>
            <!-- NO URUT BARANG -->
            <?php
            $no++;
            endforeach;
            ?>

        </table><br>
        </div><br>
    </div>

    <!-- INPUT PEMBELIAN -->
    <div class="container-fluid bg-secondary "><br>
        <h1 class="display-5 text-white">PEMBELIAN</h1>
        <p class="text-light">Silahkan isikan manual id barang yang ingin dibeli</p>
        <hr class="bg-white">
        <form action="prosespembelian.php" method="POST">
        <div class="container-sm">
            <table>
                <br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label text-white" hidden>ID</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="id" hidden>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label text-white">ID Barang</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" name="id_barang">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label text-white">Jumlah Barang</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" name="jumlah_barang">
                    </div>
                </div>
            </table><br>

            <button class="btn btn-primary gap-2 col-1" name="submit" type="submit">BELI</button>
            <br><br><br><br><br><br><br>
        </div>
        </form>
    </div>

    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <div class="container p-2">
            <div class="text-center text-light p-2">
                © 2021 Copyright <a class="text-light" href="https://krisdewa.github.io/" target="_blank">KrisDewa</a>
            </div>
        </div>
    </footer>
    </div>
    
</body>
</html>
