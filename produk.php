<?php
$model = new Produk();
$data_produk = $model->dataProduk();
?>
<!--Isi content-->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Produk</h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <table class="table table-strped table-responsive">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nama</th>
                                <th>Harga_Jual</th>
                                <th>Stok</th>
                                <th>JenisProduk</th>
                                <th>kode</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $no = 1;
                    foreach ($data_produk as $row) {
                    ?>
                            <!-- Code Html-->
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $row ['nama'] ?></td>
                                <td><?= $row ['harga_jual']?></td>
                                <td><?= $row ['stok'] ?></td>
                                <td><?= $row ['jenis_produk_id']?></td>
                                <td><?= $row ['kode'] ?></td>
                                <td>
                                    <form action="produk_controller.php" method="POST">
                                        <a href="index.php?hal=produk_detail&id=<?= $row['id']?>">
                                            <button type="button" class="btn btn-info btn-sm" title="Detail produk">
                                                <i class="fa-regular fa-eye fa-fade"></i>
                                            </button>
                                        </a>
                                        <a href="index.php?hal=produk_edit&idedit=<?= $row['id']?>">
                                            <button type="button" class="btn btn-warning btn-sm" title="Edit produk">
                                                <i class="fa-regular fa-pen-to-square"></i>
                                            </button>
                                        </a>
                                        <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus"
                                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')"
                                            tittle="Delete Produk">
                                            <i class="fa-solid fa-trash fa-beat"></i>
                                        </button>
                                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                                        </a>
                                    </form>
                                </td>
                            </tr>
                            <?php
                    $no++;
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!--File footer-->