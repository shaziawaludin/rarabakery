<?php include "../template/header.php" ?>
<?php include "../template/navbar.php" ?>

<main class="">
    <div class="container col-md-9">
        <div class="row mt-5">
            <div class="mb-5 me-3 shadow-lsm col-md-3 borderr3 border border-1 border-secondary pt-4 ">
                <div class="row my-4">
                    <div class="col-4 text-end">
                        <img src="http://localhost/rarabakeryview/assets/img/profile.jpg" alt="" width="50px" height="50px" style="object-fit: cover;">
                    </div>
                    <div class="col-8 align-self-center fw-bold">Nama Pengguna</div>
                </div>
                <div class="row justify-content-center mb-5">
                    <div class="col-10 ">
                        <p class="fw-bold">Pembelian</p>
                        <p class="m-0"><a href="" class="fw-light text-secondary text-decoration-none"></a>Menunggu</p>
                        <p class="m-0"><a href="" class="fw-light text-secondary text-decoration-none"></a>Daftar Transaksi</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 borderr2">
                <div class="row m-0">
                    <h1>Nama Pengguna</h1>
                </div>
                <div class="pb-4 row borderr2 border border-1 shadow-lsm border-secondary ">
                    <div class="col">
                        <div class="row justify-content-center">
                            <div class="col pt-2">
                                <div class="d-flex">
                                    <a class="btn border-0 border-bottom border-3 border-warning text-warning">Biodata Diri</a>
                                    <a class="btn border-0 border-3 border-warning text-secondary">Alamat</a>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <div class="row justify-content-center">
                            <!-- <?php include "biodata.php" ?> -->
                            <?php include "editalamat.php" ?>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</main>


<div class="modal fade" id="editNamaModal" tabindex="-1" aria-labelledby="editNamaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content borderr2">
            <form action="">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="editNamaModalLabel">Ubah Nama</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col d-grid">
                            <label for="editnama" class="form-label">Nama</label>
                            <input type="text" name="" class="form-control borderr2 shadow-sm border-2" id="editnama" placeholder="Your Name" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <div class="col-md-4 d-grid">
                        <button type="button" class="btn btn-warning text-white fw-bold">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editEmailModal" tabindex="-1" aria-labelledby="editEmailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content borderr2">
            <form action="">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="editEmailModalLabel">Ubah Email</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col d-grid">
                            <label for="editemail" class="form-label">Email</label>
                            <input type="email" name="" class="form-control borderr2 shadow-sm border-2" id="editemail" placeholder="yourmail@domain.com" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <div class="col-md-4 d-grid">
                        <button type="button" class="btn btn-warning text-white fw-bold">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="editTeleponModal" tabindex="-1" aria-labelledby="editTeleponModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered ">
        <div class="modal-content borderr2">
            <form action="">
                <div class="modal-header border-0">
                    <h5 class="modal-title fw-bold" id="editTeleponModalLabel">Ubah Telepon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col d-grid">
                            <label for="edittelepon" class="form-label">Telepon</label>
                            <input type="text" name="" class="form-control borderr2 shadow-sm border-2" id="edittelepon" placeholder="08xxx" value="">
                        </div>
                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <div class="col-md-4 d-grid">
                        <button type="button" class="btn btn-warning text-white fw-bold">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="editAlamatModal" tabindex="-1" aria-labelledby="editAlamatModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content borderr2">
            <form action="">
                <div class="modal-header border-0 ">
                    <h5 class="modal-title fw-bold" id="editTeleponModalLabel">Ubah Telepon</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-muted">Nama Penerima</label>
                                <input type="text" class="form-control borderr2 border shadow-sm" id="nama" placeholder="Nama kamu">
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-muted">No. Telepon</label>
                                <input type="text" class="form-control borderr2 border shadow-sm" id="nama" placeholder="08XXXXX">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-muted">Kota/Kecamatan</label>
                                <input type="text" class="form-control borderr2 border shadow-sm" id="nama" placeholder="Nama Kecamatan">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="nama" class="form-label text-muted">Kode Pos</label>
                                <input type="number" maxlength="6" class="form-control borderr2 border shadow-sm" id="nama" placeholder="Kode Pos">
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-muted">Kota/Kecamatan</label>
                                <textarea class="form-control borderr2" id="alamat" placeholder="Alamat lengkap agar kami tidak tersesat"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer border-0 justify-content-center">
                    <div class="col-md-4 d-grid">
                        <button type="button" class="btn btn-warning text-white fw-bold">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<?php include "../template/footerview.php" ?>
<?php include "../template/footer.php" ?>