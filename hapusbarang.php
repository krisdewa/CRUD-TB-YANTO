<?php

    require_once("connectdb.php");
    
    $id_barang = $_GET['id_barang'];

    $sql_delete = "DELETE FROM pembelian WHERE id_barang = '$id_barang' ";
    mysqli_query($koneksi, $sql_delete);

?>

<?php

    require_once("connectdb.php");
    
    $id_barang = $_GET['id_barang'];

    $sql_delete = "DELETE FROM stokpenjualan WHERE id_barang = '$id_barang' ";
    mysqli_query($koneksi, $sql_delete);

    header("Location:index.php");

?>