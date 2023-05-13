<?php

require_once('admin/app.php');
require_once('template_landing/header.php');
$pakaian = new Pakaian($dbh);

if (isset($_GET['id'])) {
    $detail = $pakaian->detailPakaian($_GET['id']);
} elseif (isset($_POST['submit'])) {
    $pesanan = new Pesanan($dbh);

    $pesanan->tambahPesanan($_POST);
    header('Location: pesan.php');
}
?>
<!-- ***** Main Banner Area Start ***** -->
<div class="page-heading" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="inner-content">
                    <h2>Buat Pesanan</h2>
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
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                        <form action="pesan.php" method="post">
                            <div class="form-group row">
                                <label for="nama" class="col-4 col-form-label">Nama</label>
                                <div class="col-8">
                                    <input id="nama" name="nama" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                                <div class="col-8">
                                    <input id="tanggal" name="tanggal" type="date" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="select" class="col-4 col-form-label">Select</label>
                                <div class="col-8">
                                    <select id="select" name="pakaian_id" class="custom-select">
                                        <?php foreach ($pakaian->lihatPakaian() as $pakaian) : ?>
                                            <option value="<?php echo $pakaian['id']; ?>"><?php echo $pakaian['nama']; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="qty" class="col-4 col-form-label">Jumlah Pesanan</label>
                                <div class="col-8">
                                    <input id="qty" name="qty" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="offset-4 col-8">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Product Area Ends ***** -->

<?php require_once('template_landing/footer.php'); ?>