<?php 
include_once("connectdb.php");

if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql_insert = "INSERT INTO user VALUES('$id','$nama','$username', '$password')";
    mysqli_query($koneksi, $sql_insert);

    header("Location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> SISTEM MANAJEMEN BARANG - DAFTAR </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <div class="container-sm">
        <br>
        <h1 class="display-5">PENDAFTARAN</h1>
        <p>Silahkan mengisi form dibawah untuk mendaftar akun</p>
        <hr>

        <form action="daftar_akun.php" method="POST">
            <table>
                <br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">username</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="username">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">password</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control" name="password">
                    </div>
                </div>

            </table><br>
            <div class="">
            <button class="btn btn-primary col-1" name="submit" type="submit">Daftar</button>
            <a href="login.php" class="btn btn-warning col-1">Cancel</a>
            </div>
            
        </form>
    </div>
</body>
</html>