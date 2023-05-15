<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/s.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Xiaomi</h5>
                            <!-- Product price-->
                            Rp.2.000.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Pelanggan">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')"
                            tittle="Delete Produk">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/s.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">MSI Modern 15</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            </div>
                            <!-- Product price-->
                            Rp.9.000.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent ">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Pelanggan">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')"
                            tittle="Delete Produk">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/s.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Laptop HP</h5>
                            <!-- Product price-->
                            Rp.4.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Pelanggan">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        </a>
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')"
                            tittle="Delete Produk">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="img/s.jpg" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder">Iphone 14 pro</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                            </div>
                            <!-- Product price-->
                            Rp.25.000.000
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <button type="button" class="btn btn-info btn-sm" tittle="Detail Pelanggan">
                            <i class="fa-solid fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-warning btn-sm" tittle="Edit Produk">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </button>
                        <button type="button" class="btn btn-danger btn-sm" name="proses" value="hapus"
                            onclick="return confirm('Apakah Anda Yakin ingin menghapus data produk yg bernama <?= $row['nama'] ?>')"
                            tittle="Delete Produk">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>