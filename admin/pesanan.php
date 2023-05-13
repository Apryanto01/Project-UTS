<?php
require_once('app.php');
require_once('template_admin/header.php');

$pesanan = new Pesanan($dbh);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Pesanan</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a href="tambah_produk.php" class="btn btn-primary">Tambah Produk</a></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Pakaian</th>
                                <th scope="col">Ukuran</th>
                                <th scope="col">Qty</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($pesanan->lihatPesanan() as $pesanan) :
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $pesanan['kostumer']; ?></td>
                                    <td><?php echo $pesanan['tanggal']; ?></td>
                                    <td><?php echo $pesanan['nama']; ?></td>
                                    <td><?php echo $pesanan['ukuran']; ?></td>
                                    <td><?php echo $pesanan['quantity']; ?></td>
                                </tr>
                            <?php
                                $no++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

<?php require_once('template_admin/footer.php'); ?>