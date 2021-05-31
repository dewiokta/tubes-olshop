    <?php
    include 'konek.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
        <div class="table-1">
    <?php
        $id=$_GET['id'];
        $ambil=$connect->query("SELECT*FROM pembelian join user
        on pembelian.id_pelanggan=user.id
        where pembelian.id_pembelian =$id");
        $detail = $ambil->fetch_assoc();
    ?>
    <strong><?php echo $detail['nama'];?></strong><br>
    <p>
        <?php echo $detail['no_telp'];?> <br>
        <?php echo $detail['alamat'];?> 
    </p>
    <p>
        Tanggal : <?php echo $detail['tanggal_beli'];?> <br>
        Total   : Rp.<?php echo number_format($detail['total']);?> 
    </p>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>NAMA PRODUK</th>
                <th>HARGA PRODUK</th>
                <th>JUMLAH PRODUK</th>
                <th>SUBTOTAL</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            <?php $ambil=$connect->query("SELECT*FROM pembelian_produk join produk
            on pembelian_produk.id_produk=produk.id_produk
            where pembelian_produk.id_pembelian='$_GET[id]'");?>
            <?php while($pecah=$ambil->fetch_assoc()){?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $pecah['nama_produk'];?></td>
                <td><?php echo $pecah['harga_produk'];?></td>
                <td><?php echo $pecah['jumlah'];?></td>
                <td><?php echo $pecah['harga_produk']*$pecah['jumlah'];?></td>
            </tr>
            <?php $no++;?>
            <?php }?>

        </tbody>
    </table>
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