
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="belanja.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <script src="jquery-3.4.1.js"></script>
</head>
<body>
    <?php
    session_start();
    include 'konek.php';
    ?>
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
<div class="kontainer">
<h1>HAPPY SHOPPING EXO-L</h1>
<div class="row">
    <?php $ambil = $connect->query("SELECT*FROM produk ") ?>
    <?php while($perproduk=$ambil ->fetch_assoc()){?>

    <div class="col-md-3">
        <div class="thumbnail">
            <img src="img/<?php echo $perproduk['foto_produk']; ?>" alt="">
            <div class="caption">
            <h3><?php echo $perproduk['nama_produk'];?></h3>
                <h5><?php echo 'Rp.'.number_format($perproduk['harga_produk']);?></h5>
                <a href="keranjang.php?id=<?php echo $perproduk['id_produk'];?>" class="buy">BUY</a>
                <a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="buy">Detail</a>
            </div>
        </div>
    </div>
    <?php } ?>

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