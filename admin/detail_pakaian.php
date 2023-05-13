<?php
require_once('app.php');
require_once('template_admin/header.php');

$pakaian = new Pakaian($dbh);
$detail = $pakaian->detailPakaian($_GET['id']);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar produk</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a href="produk.php" class="btn btn-primary">Kembali</a></div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama: </strong> <?php echo $detail['nama']; ?></li>
                        <li class="list-group-item"><strong>Ukuran: </strong> <?php echo $detail['ukuran']; ?></li>
                        <li class="list-group-item"><strong>Warna: </strong> <?php echo $detail['warna']; ?></li>
                        <li class="list-group-item"><strong>Stok: </strong> <?php echo $detail['stok']; ?></li>
                        <li class="list-group-item"><strong>Harga: </strong> <?php echo $detail['harga']; ?></li>
                        <li class="list-group-item"><strong>Tipe: </strong> <?php echo $detail['tipe']; ?></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php require_once('template_admin/footer.php'); ?>