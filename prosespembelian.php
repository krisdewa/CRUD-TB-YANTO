<?php
    include_once("connectdb.php");

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $id_barang = $_POST['id_barang'];
        $jumlah_barang = $_POST['jumlah_barang'];

        $result = mysqli_query($koneksi, "INSERT INTO pembelian (id, id_barang, jumlah_barang) VALUE('$id','$id_barang', '$jumlah_barang')");

        header('Location: pembelian.php');
    }
?>