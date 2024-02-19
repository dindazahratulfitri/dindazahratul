<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    
</body>
</html> 
 <head>
 <body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">WEB GALERI FOTO</a></h1>
        <ul>
           <li><a href="registrasi.php">Registrasi</a></li>
           <li><a href="login.php">Login</a></li>
        </ul>
        </div>
    </header>

     <!-- content -->
     <div class="section">
        <div class="container">
            <h3>Registrasi Akun</h3>
            <div class="box">
               <form action="" method="POST">
                   <input type="text" name="nama" placeholder="Nama User" class="input-control" required>
                   <input type="text" name="user" placeholder="Username" class="input-control" required>
                   <input type="text" name="pass" placeholder="Password" class="input-control" required>
                   <input type="text" name="tlp" placeholder="Nomor Telpon" class="input-control" required>
                   <input type="text" name="email" placeholder="E-mail" class="input-control" required>
                   <input type="text" name="almt" placeholder="Alamat" class="input-control" required>
                   <input type="submit" name="submit" value="Submit" class="btn">
               </form>
               <?php
                   if(isset($_POST['submit'])){
					   
					   $nama = ucwords($_POST['nama']);
					   $username = $_POST['user'];
					   $password = $_POST['pass'];
					   $telpon = $_POST['tlp'];
					   $mail = $_POST['email'];
					   $alamat = ucwords($_POST['almt']);
                       $insert = mysqli_query("INSERT INTO galerifoto VALUES (
                        null,
                        '".$nama."',
                        '".$username."',
                        '".$password."',
                        '".$telpon."',
                        '".$mail."',
                        '".$alamat."')
                        
                        ");
                        if($insert){
                        echo '<script>alert("Registrasi berhasil")</script>';
                        echo '<script>window.location="login.php"</script>';
                    }else{
                        echo 'gagal '.mysqli_error($conn);
                    }
    
   }
?>
</div>

</div>
</div>
</div>
</div>


</div>
</footer>
</body>
</html>

        </head>