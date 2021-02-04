<?php include "../template/header.php" ?>
<?php include "../template/navbar.php" ?>

<main>
    <div class="container col-sm-9">
        <h1 class="fw-bold my-3 text-center">Silahkan Selesaikan Pembayaran</h1>
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="card borderr2 mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-8">
                                <h5 class="">Alfamart</h5>
                            </div>
                            <div class="col-4 text-end">
                                <span><img src="http://localhost/rarabakeryview/assets/img/alfamart.png" alt="" width="70px" class="me-3"></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-sm-5 p-4">
                        <div class="row mb-3">
                            <p class="card-text text-muted m-0"><small>Kode Pembayaran</small></p>
                            <h5 class="fs-4 fw-bold">XXXXXXXX</h5>
                        </div>

                        <div class="row">
                            <div class="col">
                                <p class="card-text text-muted m-0"><small>Total Pembayaran</small></p>
                                <h5 class="card-title text-danger fw-bold">Rp.000.000</h5>
                            </div>
                            <div class="col text-end align-self-end">
                                <a href="#" class="text-decoration-none text-warning fw-bold" data-bs-toggle="modal" data-bs-target="#detailModal">Detail</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-6 text-end">
                        <button class="btn btn-light border-warning fw-bold text-warning borderr2">Pesan Kue Lagi</button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-warning fw-bold text-white borderr2">Status Pembayaran</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


<!-- modal detail -->
<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-dialog-scrollable">
        <div class="modal-content borderr2">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="detailModalLabel">Detail Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row text-muted">
                    <div class="col">
                        Total Harga (x barang)
                    </div>
                    <div class="col text-end">
                        Rp.000.000
                    </div>
                </div>
                <div class="row text-muted">
                    <div class="col">
                        Total ongkos kirim
                    </div>
                    <div class="col text-end">
                        Rp.000.000
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col fw-bold">
                        Total Tagihan
                    </div>
                    <div class="col fw-bold text-end">
                        Rp.000.000
                    </div>
                </div>
                <div class="row text-muted">
                    <div class="col">
                        Biaya layanan
                    </div>
                    <div class="col text-end">
                        Rp.000.000
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col fw-bold">
                        Total Tagihan
                    </div>
                    <div class="col fw-bold text-end text-danger">
                        Rp.000.000
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col fw-bold">
                        Dibayar dengan
                    </div>

                </div>
                <div class="row text-muted">
                    <div class="col">
                        Alfamart
                    </div>
                    <div class="col text-end">
                        Rp.000.000
                    </div>
                </div>
                <div class="infobarang mt-4">
                    <h5 class="fw-bold">Barang yang dibeli</h5>
                    <p class="fw-bold m-0">Nama Baranggggggg</p>
                    <div class="row text-muted">
                        <div class="col"><small>5 x Rp.000.000</small></div>
                        <div class="col text-end"><small>Rp.000.000</small></div>
                    </div>
                    <div class="row text-muted mt-2">
                        <div class="col">
                            <p class="m-0"> <small>Ongkos Kirim</small></p>
                            <p class=" m-0"><small>Dikirim oleh toko</small></p>
                        </div>
                        <div class="col text-end"><small>Rp.000.000</small></div>
                    </div>
                    <p class="fw-bold mt-3">Alamat pengiriman</p>
                    <p class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam laboriosam accusamus aperiam quis necessitatibus incidunt eos laudantium inventore error. Neque commodi quibusdam fugit libero molestiae dolore repellendus aliquam consectetur suscipit?</p>

                </div>
            </div>

        </div>
    </div>
</div>

<?php include "../template/footerview.php" ?>
<?php include "../template/footer.php" ?>