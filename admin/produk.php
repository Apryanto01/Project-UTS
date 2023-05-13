<?php
require_once('app.php');
require_once('template_admin/header.php');

$pakaian = new Pakaian($dbh);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar produk</h1>

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
                                <th scope="col">Ukuran</th>
                                <th scope="col">Warna</th>
                                <th scope="col">Stok</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jenis</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($pakaian->lihatPakaian() as $pakaian) :
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $pakaian['nama']; ?></td>
                                    <td><?php echo $pakaian['ukuran']; ?></td>
                                    <td><?php echo $pakaian['warna']; ?></td>
                                    <td><?php echo $pakaian['stok']; ?></td>
                                    <td><?php echo $pakaian['harga']; ?></td>
                                    <td><?php echo $pakaian['tipe']; ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="detail_pakaian.php?id=<?php echo $pakaian['pakaian_id']; ?>" class="btn btn-warning">Lihat</a>
                                            <a href="edit_produk.php?id=<?php echo $pakaian['pakaian_id']; ?>" class="btn btn-primary mx-2">Ubah</a>
                                            <form action="proses/produk.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $pakaian['pakaian_id']; ?>">
                                                <button name="hapus_pakaian" type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </div>
                                    </td>
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