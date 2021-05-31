<?php
     session_start();
     include 'konek.php';

    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>

    <header>
        <div class="container">
            <div id="brand">
                <img src="img/exol-logo (1).png" alt="">
                <h1 class="wlc"> WELCOME TO AERI SHOP</h1>

            </div>
        </div>
    </header>

    <div class="cover">
        <div class="login2">
            <img src="img/exol-logo (1).png" class="profil" alt="">
            <h1>Create Your Account!</h1>
            <form method="POST">
            <div class="input-place">
                <input type="text" name="nama">
                <span>Nama Lengkap</span>
                </div>
                <div class="input-place">
                <input type="text" name="uname">
                <span>Username</span>
                </div>
                <div class="input-place">
                <input type="password" name="pass">
                <span>Password</span>
                </div> 
                <div class="input-place">
                <input type="text" name="notelp">
                <span>Nomor Telepon</span>
                </div>
                <div class="input-place">
                <input type="text" name="alamat">
                <span>Alamat</span>
                </div>
                <div class="input-place">
                <button name="register">Register</button>
                </div>
            </form>
            <?php
               if(isset($_POST["register"])){

               $nama = $_POST["nama"];
               $uname = $_POST["uname"];
               $pass = $_POST["pass"];
               $no = $_POST["notelp"];
               $alamat= $_POST["alamat"];

               $query = $connect->query("SELECT*FROM user 
               where username='$uname'");
               $cocok = $query->num_rows;

               if($cocok == 1){
                   echo "<script>alert('Username Telah digunakan, silahkan register kembali')</script>";
                   header("Location:register.php");
               }else{
                  $connect->query("INSERT INTO user(nama,username,password,no_telp,alamat)
                   values ('$nama','$uname','$pass','$no','$alamat')");

                   echo "<script> alert('Register succes, please login!')</script>";
                   header("Location:login.php");
               }
            }
       ?>
        </div>
    </div>

              
        
</body>
</html>