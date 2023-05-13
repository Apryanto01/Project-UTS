<?php

require_once('admin/app.php');
require_once('template_landing/header.php');
$pakaian = new Pakaian($dbh);
?>
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Daftar Produk</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Main Banner Area End ***** -->


<!-- ***** Products Area Starts ***** -->
<section class="section" id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h2>Our Latest Products</h2>
                    <span>Check out all of our products.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach ($pakaian->lihatPakaian() as $pakaian) : ?>
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
<!-- ***** Products Area Ends ***** -->

<?php require_once('template_landing/footer.php'); ?>