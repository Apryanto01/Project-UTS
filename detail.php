<?php

require_once('admin/app.php');
require_once('template_landing/header.php');
$pakaian = new Pakaian($dbh);

if (isset($_GET['id'])) {
    $detail = $pakaian->detailPakaian($_GET['id']);
}
?>
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Detail Produk</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Product Area Starts ***** -->
<section class="section" id="product">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="left-images">
                    <img src="assets/images/single-product-01.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="right-content">
                    <h4><?php echo $detail['nama']; ?></h4>
                    <span class="price">Rp <?php echo $detail['harga']; ?></span>
                    <ul class="stars">
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                        <li><i class="fa fa-star"></i></li>
                    </ul>
                    <div class="my-3">
                        <strong>Ukuran</strong>
                        <span><?php echo $detail['ukuran']; ?></span>
                    </div>
                    <div class="mb-3">
                        <strong>Warna</strong>
                        <span><?php echo $detail['warna']; ?></span>
                    </div>
                    <div class="mb-3">
                        <strong>Tipe</strong>
                        <span><?php echo $detail['tipe']; ?></span>
                    </div>
                    <div class="total">
                        <h4>Harga: Rp <?php echo $detail['harga']; ?></h4>
                        <div class="main-border-button"><a href="pesan.php">Pesan</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->

<?php require_once('template_landing/footer.php'); ?>