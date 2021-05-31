
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
    <?php
     include 'konek.php';
     session_start();

    ?>
    <header>
        <div class="container">
            <div id="brand">
                <img src="img/exol-logo (1).png" alt="">
                <h1 class="wlc"> WELCOME TO AERI SHOP</h1>

            </div>
        </div>
    </header>

    <div class="cover">
        <div class="login">
            <img src="img/exol-logo (1).png" class="profil" alt="">
            <h1>Login Here!</h1>
            <form method="POST">
                <div class="input-place">
                <input type="text" name="uname">
                <span>Username</span>
                </div>
                <div class="input-place">
                <input type="password" name="pass">
                <span>Password</span>
                </div> 
                <div class="input-place">
                <button name="login">Login</button>
                </div>
            </form>

           
        </div>
    </div>
    <?php
           
           
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
                    header("location:belanja.php");
                    
                }else{
                    echo "<script>alert('login failed, try again ! Or make an account!');</script>";
                    echo "<script>location='login.php';</script>";
                }
            }
        ?>
</body>
</html>