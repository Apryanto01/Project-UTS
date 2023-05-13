<?php
require_once('app.php');
require_once('template_admin/header.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">s Page</h1>

    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                    <form action="proses/jenis.php" method="post">
                        <div class="form-group row">
                            <label for="tipe" class="col-4 col-form-label">Jenis Pakaian</label>
                            <div class="col-8">
                                <input id="tipe" name="tipe" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="tambah_jenis" type="submit" class="btn btn-primary">Tambah Jenis</button>
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