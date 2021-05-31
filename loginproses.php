<?php
            include 'konek.php';
            session_start();
           
            if(isset($_POST["login"])){

                $uname = $_POST["uname"];
                $pass = $_POST["pass"];
                $ambil = $connect->query("SELECT*FROM user 
                where username='$uname' AND password = '$pass'");
                $cocok = $ambil->num_rows;

                if ($cocok == 1) {
                    $akun = $ambil->fetch_assoc();
                    $_SESSION["user"]= $akun;
                    echo "<script>alert('login succes, happy shopping');</scrip>";
                    echo "<script>location='belanja.php';</script>";
                }else{
                    echo "<script>alert('login failed, try again !');</scrip>";
                    echo "<script>location='login.php';</script>";
                }
            }
        ?>