<?php 
    include_once("connectdb.php");
    login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>SISTEM MANAJEMEN BARANG - Log Pembelian</title>

</head>
<body id="page-top">
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

    <!-- LOG PEMBELIAN -->
    <?php
        require_once("connectdb.php");

        $sql_get = "SELECT * FROM pembelian";
        $query_pembelian = mysqli_query($koneksi, $sql_get);
        $resultspembelian = [];

        while($row = mysqli_fetch_assoc($query_pembelian)) {
            $resultspembelian[] = $row;
        }
    ?>
    
    <div class="container-fluid"><br>
    <h1 class="display-5 text-dark">LOG PEMBELIAN</h1>
    <p>History pembelian, Opsi menghapus akan hapus log sesuai id barang(id barang yg terpilih akan dihapus semua log nya)</p>
    <hr>
        <table class="table table-light table-striped table-hover">
            <thead class="table-secondary table-bordered border-default">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">ID PEMBELIAN</th>
                    <th scope="col">ID BARANG</th>
                    <th scope="col">JUMLAH BARANG</th>
                    <th scope="col">OPSI</th>
                </tr>
            </thead>
            <?php
            $no =1;
            foreach($resultspembelian as $resultpembelian) :
            ?>
            <tbody class="table-orange table-bordered border-dark">
                <tr>
                    <td> <?= $no ?></td>
                    <td> <?= $resultpembelian['id'] ?></td>
                    <td> <?= $resultpembelian['id_barang'] ?></td>
                    <td> <?= $resultpembelian['jumlah_barang'] ?></td>
                    <td>
                        <a class="btn btn-danger " href="hapuslog.php?id_barang=<?=$resultpembelian['id_barang'];?>"><i class="bi bi-trash"></i></a>
                    </td>
                </tr>
                
            </tbody>
            <?php
            $no++;
            endforeach;
            ?>
        </table><br>

        <br><br><br><br>
    </div>        
    </div>
    <br><br>
    <footer class="bg-dark text-center text-lg-start fixed-bottom">
        <div class="container p-2">
        <div class="text-center text-light p-2">
            © 2021 Copyright <a class="text-light" href="https://krisdewa.github.io/" target="_blank">KrisDewa</a>
        </div>
        </div>
    </footer>
</body>
</html>