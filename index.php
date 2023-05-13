<?php
require_once('admin/app.php');
require_once('template_landing/header.php');
$produk = new Pakaian($dbh);
?>

<!-- ***** Main Banner Area Start ***** -->
<div class="main-banner bg-dark" id="top">
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 350px;">
        <div class="section-heading">
            <h2 class="fw-bold text-light fs-1">TOKO BAJU</h2>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->

<!-- ***** Men Area Starts ***** -->
<section class="section" id="men">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Semua Pakaian</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($produk->lihatPakaian() as $pakaian) : ?>
                <div class="col-lg-4">
                    <a class="item" href="detail.php?id=<?php echo $pakaian['id']; ?>">
                        <div class="thumb">
                            <img src="assets/images/men-01.jpg" alt="">
                        </div>
                        <div class="down-content">
                            <h4><?php echo $pakaian['nama']; ?></h4>
                            <span>Rp <?php echo $pakaian['harga']; ?></span>
                            <ul class="stars">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                            </ul>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- ***** Men Area Ends ***** -->

<!-- ***** Subscribe Area Starts ***** -->
<div class="subscribe">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="section-heading">
                    <h2>Pesan pakaian idaman kamu sekarang!</h2>
                    <span>Klik tombol pesan dibawah untuk membuat pesanan</span>
                </div>
                <a href="pesan.php" class="btn btn-primary btn-lg">Buat Pesanan</a>
            </div>
        </div>
    </div>
</div>
<!-- ***** Subscribe Area Ends ***** -->

<?php require_once('template_landing/footer.php') ?>