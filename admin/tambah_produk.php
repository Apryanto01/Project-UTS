<?php
require_once('app.php');
require_once('template_admin/header.php');
$jenis = new JenisPakaian($dbh);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Tambah Produk</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <form action="proses/produk.php" method="post">
                        <div class="form-group row">
                            <label for="nama" class="col-4 col-form-label">Nama</label>
                            <div class="col-8">
                                <input id="nama" name="nama" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="warna" class="col-4 col-form-label">Warna</label>
                            <div class="col-8">
                                <input id="warna" name="warna" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-4 col-form-label">Stok</label>
                            <div class="col-8">
                                <input id="stok" name="stok" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga" class="col-4 col-form-label">Harga</label>
                            <div class="col-8">
                                <input id="harga" name="harga" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="ukuran" class="col-4 col-form-label">Ukuran</label>
                            <div class="col-8">
                                <select id="ukuran" name="ukuran" class="custom-select">
                                    <option value="S">S</option>
                                    <option value="M">M</option>
                                    <option value="L">L</option>
                                    <option value="XL">XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tipe" class="col-4 col-form-label">Tipe</label>
                            <div class="col-8">
                                <select id="tipe" name="tipe" class="custom-select">
                                    <?php foreach ($jenis->lihatJenis() as $jenis) : ?>
                                        <option value="<?php echo $jenis['id']; ?>"><?php echo $jenis['tipe']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <div class="offset-4 col-8">
                                <button name="tambah_pakaian" type="submit" class="btn btn-primary btn-lg">Tambah produk</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php require_once('template_admin/footer.php'); ?>