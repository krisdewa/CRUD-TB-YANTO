<!DOCTYPE html>
<html>
<head>
  <title> SISTEM MANAJEMEN BARANG - LOGIN </title>
  <link rel="stylesheet" type="text/css" href="css/style_login.css">
</head>

<body>
	<div class="head_login">
		<marquee behavior="alternate"> SISTEM MANAJEMEN TOKO BANGUNAN PAK YANTO </marquee>
	</div>
	<div class="kotak_login">
	    <form name="form" method="POST" action="proseslogin.php">
            <div class="imgavatar"><img src="css/img/avatar.png" alt="avatar" class="avatar"></div><br>

            <label> Username </label>
            <input type="text" name="username" class="form_login" placeholder="  Masukkan Username">
            <label> Password </label>
            <input type="Password" name="password" class="form_login" placeholder="  Masukkan Password">
            <center>
                <?php 
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan'] == "gagal"){
                            echo "Login gagal! username dan password salah!";
                        }
                    }
                ?><br><br>
                <input type="submit" name="submit"  class="tombol_submit" value="LOGIN"><br><br><br>
                Klik Disini untuk <a class="daftar" href="daftar_akun.php">Membuat Akun</a>
			      </center><br><br>
    </form>
  </div>

</body>
</html>

