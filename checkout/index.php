<?php include "../template/header.php" ?>
<?php include "../template/navbarcheckout.php" ?>

<main>
    <div class="container col-md-9 col-11">
        <div class="row my-4">
            <div class="col-md-8 col-12">
                <h1 class="fw-bold mb-3">Checkout</h1>
                <div class="alamat">
                    <h3 class="fw-bold">Alamat</h3>
                    <hr>
                    <div class="my-4">
                        <p class="text-muted m-0" id="namaPenerima">
                            Nama Penerima
                        </p>
                        <p class="text-muted m-0" id="namaPenerima">
                            085775406400
                        </p>
                        <p class="text-muted mt-3 text-justify"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto numquam laudantium atque accusantium ad ex rerum maxime temporibus obcaecati corrupti porro perspiciatis earum veniam commodi, blanditiis optio quidem eius expedita!</p>
                    </div>
                    <hr>
                    <div id="tombol-container">
                        <button type="button" class="btn text-secondary fw-bold borderr2 border border-dark">Ubah Alamat</button>
                        <!-- kalau belum ada alamat -->
                        <!-- <button type="button" class="btn btn-success fw-bold borderr2 ">Tambah Alamat</button> -->
                    </div>
                    <hr>
                </div>
                <h3 class="fw-bold">Detail Barang</h3>
                <form action="">
                    <!-- satuan product -->
                    <?php for ($i = 0; $i < 5; $i++) : ?>
                        <div class="row my-3">
                            <div class="col-md-3">

                                <a href="">
                                    <img src="http://localhost/rarabakeryview/assets/img/recblue.png" class="" alt="" width="100%">
                                </a>

                            </div>
                            <div class="col-md-6">
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
                                        <p class="fw-bold fs-3 harga">Rp.000.000 <span class="fs-7">X (3)</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 d-flex align-items-center">
                                <select class="form-select bg-warning fw-bold text-white borderr2" aria-label="pengiriman">
                                    <option selected>Pengiriman</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                        <hr>
                        <div class="Subtotal text-end">
                            Subtotal <span class="fw-bold  fs-4">Rp. 000.000</span>
                        </div>
                        <hr>
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
                                <button type="button" class="btn btn-warning text-white fw-bold borderr2" data-bs-toggle="modal" data-bs-target="#bayarModal">Bayar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- Modal -->
<div class="modal fade" id="bayarModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bayarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content modal-fullscreen-sm-down bg-light borderr2">
            <div class="modal-header border-0  bg-white">
                <h5 class="modal-title fw-bold" id="bayarModalLabel">Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="container mb-2 pb-2 bg-white">
                <div class="row">
                    <div class="col-8">
                        <h6>Metode Pembayaran</h6>
                    </div>
                    <div class="col-4 text-end">
                        <a href="" class="text-decoration-none text-warning fw-bold" data-bs-toggle="modal" data-bs-target="#metodePembayaranModal" role="button">Lihat semua</a>
                    </div>
                </div>
            </div>
            <div class="modal-body bg-white">

                <div class="row">
                    <p class="fw-bold">Ringkasan Pembayaran</p>
                    <?php for ($i = 0; $i < 10; $i++) : ?>
                        <div class="row text-muted">
                            <div class="col-6"><small>Total Tagihan</small></div>
                            <div class="col-6 text-end"><small>Rp.000.000</small></div>
                        </div>
                        <div class="row text-muted">
                            <div class="col-6"><small>Biaya Layanan</small></div>
                            <div class="col-6 text-end"><small>Rp.000</small></div>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
            <div class="modal-footer mt-2 bg-white">
                <div class="col-11">
                    <div class="row">
                        <div class="col-6">
                            <p class="fw-bold m-0"><small>Total Bayar</small></p>
                            <p class="fw-bold fs-3 m-0 text-danger">Rp.000.000</p>
                        </div>
                        <div class="col-6 text-end d-grid p-2">
                            <button type="button" class="btn btn-warning text-white fw-bold borderr2">Bayar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="metodePembayaranModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="bayarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm modal-dialog-scrollable">
        <div class="modal-content modal-fullscreen-sm-down bg-light borderr2">
            <div class="modal-header border-0  bg-light">
                <h5 class="modal-title fw-bold" id="metodePembayaranModalLabel">Pilih Petode Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body col-10 mx-auto bg-light">
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://localhost/rarabakeryview/assets/img/ovo.png" alt="" width="30px" class="me-3">
                            </div>
                            <div class="col-9">
                                <p class="fw-bold">OVO</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="radio" name="mpembayaran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://localhost/rarabakeryview/assets/img/bni.png" alt="" width="30px" class="me-3">
                            </div>
                            <div class="col-9">
                                <p class="fw-bold">BNI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="radio" name="mpembayaran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://localhost/rarabakeryview/assets/img/bri.png" alt="" width="30px" class="me-3">
                            </div>
                            <div class="col-9">
                                <p class="fw-bold">BRI</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="radio" name="mpembayaran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://localhost/rarabakeryview/assets/img/indomaret.png" alt="" width="30px" class="me-3">
                            </div>
                            <div class="col-9">
                                <p class="fw-bold">Indomaret</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="radio" name="mpembayaran">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col">
                        <div class="row">
                            <div class="col-3">
                                <img src="http://localhost/rarabakeryview/assets/img/alfamart.png" alt="" width="30px" class="me-3">
                            </div>
                            <div class="col-9">
                                <p class="fw-bold">Alfamart</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2">
                        <input class="form-check-input" type="radio" name="mpembayaran">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
<?php include "../template/footercheckout.php" ?>
<?php include "../template/footer.php" ?>