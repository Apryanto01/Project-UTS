<?php
require_once('app.php');
require_once('template_admin/header.php');

$jenis = new JenisPakaian($dbh);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Jenis produk</h1>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header"><a href="tambah_jenis.php" class="btn btn-primary">Tambah Jenis</a></div>
                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;

                            foreach ($jenis->lihatJenis() as $jenis) :
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $no; ?></th>
                                    <td><?php echo $jenis['tipe']; ?></td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="ubah_jenis.php?id=<?php echo $jenis['id']; ?>" class="btn btn-primary mx-2">Ubah</a>
                                            <form action="proses/jenis.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $jenis['id']; ?>">
                                                <button type="submit" name="hapus_jenis" class="btn btn-danger">Hapus</button>
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