<?php include "../template/header.php" ?>
<?php include "../template/navbar.php" ?>

<main>
    <div class="container col-md-9 col-11">
        <div class="row my-4">
            <div class="col-md-8 col-12">
                <h1 class="fw-bold">Keranjang</h1>
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="" id="checkAll">
                    <label class="form-check-label" for="checkAll">
                        Pilih Semua
                    </label>
                </div>
                <hr>
                <form action="">
                    <!-- satuan product -->
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <div class="row justify-content-center">
                                    <div class="col-md-2 col-2">
                                        <input class="form-check-input check-product position-relative top-50 translate-middle-y" type="checkbox" value="" id="">
                                    </div>
                                    <div class="col-md-9 col-4">
                                        <a href="">
                                            <img src="http://localhost/rarabakeryview/assets/img/recblue.png" class="" alt="" width="100%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="row">
                                    <div class="col">
                                        <a href="" class="text-decoration-none text-dark">
                                            <p class="nama-barang m-0 text-truncate">Nama barang yangg panjanggg Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum fuga harum deleniti quaerat? Eligendi nesciunt blanditiis eaque quis consequuntur accusantium, odio facere saepe sint perspiciatis hic maiores. Eveniet, molestiae labore.</p>
                                        </a>
                                        <p class="text-muted m-0"><small>Varian yang dipilih</small></p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p class="fw-bold fs-3 harga">Rp.000.000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row m-0 mb-3 p-0 mt-3">
                                <div class="col-md-7 m-0 p-0 col-6">
                                    <div class="ms-lg-5">
                                        <label class="text-warning fw-bold ms-lg-2 fs-6">Tulis Catatan</label>
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class=" col-md-5 col-6">
                                    <div class="row m-0 p-0 g-0 h-100 align-items-center">
                                        <div class="col-md-2 text-md-end">
                                            <a href="" class="text-secondary text-decoration-none">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-10">
                                            <div class="row justify-content-end">
                                                <div class="col-5 text-end">
                                                    <label class="fs-6 fw-bold text-secondary">Jumlah</label>
                                                </div>
                                                <div class="col-7">
                                                    <input type="number" class="form-control form-control-sm borderr1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                        </div>
                    <?php endfor; ?>
                </form>
            </div>
            <div class="col-md-4 col-12">
                <div class="card borderr2 shadow-sm border-1 position-sticky" style="top:15%">
                    <div class="card-body">
                        <p class="fw-bold fs-6">Ringkasan Belanja</p>
                        <div class="row">
                            <div class="col-7 fw-light">
                                <small>Total Harga ( 2 produk )</small>
                            </div>
                            <div class="col-5 text-end fw-bold">
                                Rp.000.000
                            </div>
                        </div>
                        <hr style="height: 3px; color:#000; background-color:#000; ">
                        <div class="row mb-3">
                            <div class="col-6 fw-bold">
                                Total Harga
                            </div>
                            <div class="col-6 text-end fw-bold">
                                Rp.000.000
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10 d-grid">
                                <button type="button" class="btn btn-warning text-white fw-bold borderr2">Beli (<span id="jumlahTotalBeli">2</span>)</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

<?php include "../template/footerview.php" ?>
<?php include "../template/footer.php" ?>