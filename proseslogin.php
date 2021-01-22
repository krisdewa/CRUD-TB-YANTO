<?php 

session_start();
include 'connectdb.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$data = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password ='$password' ");

$cekdata = mysqli_num_rows($data);

if($cekdata > 0){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:index.php");
}else{
	header("location:login.php ?pesan=gagal");
}

?>