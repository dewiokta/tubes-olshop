<?php

session_start();
include 'konek.php';
?>
<?php

    $id_produk=$_GET['id'];

   $query= $connect->query("SELECT*FROM produk where id_produk='$id_produk'");
    $detail = $query->fetch_assoc();
    // echo "<pre>";
    // print_r($detail);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="cart.css">
</head>
<body>
<header>
    <div class="container">
        <div id="brand">
            <img src="img/exol-logo (1).png" alt="">
            <h1 class="wlc"> WELCOME TO AERI SHOP</h1>

        </div>
        <nav>
            <ul>
            <li><a href="beranda.html">Home</a></li>
                <li class="active"><a href="belanja.php">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <?php if (isset($_SESSION["user"])): ?>
                <li><a href="logout.php">Logout</a></li>
                <?php else :?>
                <li><a href="login.php">Login</a></li>
                <?php endif ?>
                <li><a href="checkout.php">Check Out</a></li>
            </ul>
        </nav>
    </div>
</header>

<section class="konten">
    <div class="kotak">
        <div class="isi">
            <div class="col-md-3">
                <img src="img/<?php echo $detail['foto_produk']; ?>" alt="" class="img-respon">
            </div>
            <div class="col-md-4">
                <h2><?php echo $detail['nama_produk'];?></h2>
                <h4>Rp.<?php echo number_format($detail['harga_produk']);?></h4>
                <h4><?php echo $detail['deskripsi'];?></h4>
                <form method="post">
                <div>
                        <input type="number" min ="1" name="jumlah" class="control">
                        <button class="buy" name="beli">Buy</button>
                    </div>
                </form>

                <?php
                    if(isset($_POST["beli"])){
                        $jumlah = $_POST["jumlah"];
                        $_SESSION["keranjang"][$id_produk] =$jumlah;;
                        echo "<script>alert('Produk telah masuk di keranjang');</script>";
                        header("location:cart.php");
                    }
                ?>
                <div class="">
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section id="boxes">
    <div class="container">
        <div class="box">
            <img src="img/ig.png" alt="">
            <h3>Instagram</h3>
            <p>Follow our Instagram acc @aeri_ina</p>
        </div>

        <div class="box">
            <img src="img/line.png" alt="">
            <h3>Line</h3>
            <p>Follow our Line acc @aeri.exo</p>
        </div>

        <div class="box">
            <img src="img/twitter.jpg" alt="">
            <h3>Twitter</h3>
            <p>Follow our Twitter acc @aeri_ina</p>
        </div>

        <div class="box">
            <img src="img/wa.png" alt="">
            <h3>WhatsApp</h3>
            <p>Call our shop in 010-9282-xxx</p>
        </div>
    </div>

</section>
<footer>
    <p>
        Aeri Shop, Copyright @2020
    </p>
</footer>
</body>
</html>