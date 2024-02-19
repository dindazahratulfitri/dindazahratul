<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Web Galeri Foto</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="bg-login">
     <div class="box-login">
         <h2>Login</h2>
         <form action="" method="POST">
             <input type="text" name="user" placeholder="Username" class="input-control">
             <input type="password" name="pass" placeholder="Password" class="input-control">
             <input type="submit" name="submit" value="Login" class="btn">
         </form>
         <?php
		     if(isset($_POST['submit'])){
				 session_start();
				 include 'koneksi.php';


				 
				 $cek = mysqli_query("SELECT * FROM tb_admin WHERE username = '","'AND password = '","'");
				 if(mysqli_num_rows($cek) > 0){
					 $d = mysqli_fetch_object($cek);
					 $_SESSION['status_login'] = true;
					 $_SESSION['a_global'] = $d;
					 $_SESSION['id'] = $d->admin_id;
					 echo '<script>window.location="dashboard.php"</script>';
				 }else{
					 echo '<script>alert("Username atau password anda salah")</script>';
				 }
			 }
	     ?><br />
         <p>Belum punya akun? daftar <a style="color:#00C;" href="registrasi.php">DISINI</a></p>
         <p>atau klik <a style="color:#00C;" href="index.php">Kembali</a></p>
      </div>
</head>

</html>
</body>
</html>