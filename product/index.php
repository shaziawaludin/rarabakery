<?php include "../template/header.php" ?>
<?php include "../template/navbar.php" ?>

<main>
    <div class="container col-md-9">
        <div class="row my-4">
            <div class="col-md-9 col-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <img src="http://localhost/rarabakeryview/assets/img/recblue.png" width="120px" height="350px" style="object-fit: cover;" alt="">
                        </div>
                        <div class="row mt-4">
                            <div class="col-4">
                                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" width="100%" alt="">
                            </div>
                            <div class="col-4">
                                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" width="100%" alt="">
                            </div>
                            <div class="col-4">
                                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 mt-4">
                        <p class="text-truncate fs-5 fw-bold">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui exercitationem id cumque numquam magnam dolorem sint obcaecati ullam doloribus! Nemo molestiae, saepe consectetur libero voluptates vel delectus dolor iusto nobis.</p>
                        <p class="fw-bold fs-2">Rp.000.000</p>
                        <hr>
                        <p class="ms-3 my-1">
                            <a href="" class="text-decoration-none text-warning fw-bold">Detail</a>
                        </p>
                        <hr>

                        <div class="descrtiption mt-5">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio, dolorum molestias voluptates aliquam fugiat accusantium quae nemo minus. Doloremque temporibus qui odio voluptatum commodi laborum dolor recusandae soluta ipsa id?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12">
                <div class="card borderr2 shadow-sm border-1">
                    <div class="card-body ">
                        <form action="">
                            <label for="" class="fw-bold mb-1">Pilih Varian</label>
                            <select class="form-select m-0 mb-3 borderr2" aria-label="Default select example">
                                <option selected>Varian</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Threeeeeeee</option>
                            </select>
                            <div class="mb-3">
                                <label for="qty" class="form-label fw-bold">Jumlah</label>
                                <input type="number" class="form-control borderr2" id="qty">
                            </div>
                            <div class="mb-3">
                                <label for="catatan" class="form-label fw-bold">Jumlah</label>
                                <textarea name="catatan" id="catatan" class="form-control borderr2" cols="30" rows="5"></textarea>
                            </div>

                            <div class="row my-2">
                                <div class="col"><small>Subtotal</small></div>
                                <div class="col"><strong>Rp.000.000</strong></div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button type="button" class="btn btn-warning btn-sm text-white fw-bold borderr2" data-bs-toggle="modal" data-bs-target="#keranjangModal">+ Keranjang</button>
                                <button type="button" class="btn border-warning btn-sm text-warning fw-bold borderr2">Beli Sekarang</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="itemDisplay my-4">
            <h3 class="fs-5 mb-3">Yang mungkin kamu suka</h3>
            <div class="row">
                <?php $i = 0;
                for ($i = 0; $i < 12; $i++) : ?>
                    <div class="col-lg-2 col-sm-4 col-6 mt-4">
                        <div class="card borderr2 shadow-lsm border-0">
                            <a href="" class="d-block m-0 text-decoration-none text-dark">
                                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" class="card-img-top " alt="">
                                <div class="card-body m-0 ">
                                    <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora quibusdam doloribus unde obcaecati. Id, sint hic minus dolorem asperiores perspiciatis rem esse optio expedita itaque doloremque eveniet ad, velit corrupti!</p>
                                    <h6 class="card-title fw-bold">Rp.000.000</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</main>

<div class="modal fade" id="keranjangModal" tabindex="-1" aria-labelledby="keranjangModal" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-sm-down modal-lg ">
        <div class="modal-content pb-4 px-4 borderr1">
            <div class="modal-header border-0 text-center">
                <h5 class="modal-title text-warning fw-bold position-relative start-50 translate-middle-x" id="keranjangModalTitle">Berhasil Ditambahkan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row px-3 g-2">
                    <div class="col-sm-9 text-truncate">
                        <img src="http://localhost/rarabakeryview/assets/img/boluhijau.jpg" alt="" width="80px" height="80px" style="object-fit: cover;" class="borderr2">
                        <span class="ms-2 fs-5">Bolu Hijau Lorem ipsum, dolor sit amet consectetur adipisicing elit. Deleniti quibusdam eius, quod enim voluptas unde nemo, facilis maxime corrupti qui quo illo architecto, nobis mollitia facere! Dolorum provident doloribus tenetur.</span>
                    </div>
                    <div class="col-sm-3 d-flex align-items-center justify-content-center">
                        <button type="button" class=" btn btn-warning btn-sm text-white fw-bold borderr2">Lihat Keranjang</button>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <p class="fw-bold">Yang Mungkin Kamu Suka</p>
                <?php $i = 0;
                for ($i = 0; $i < 6; $i++) : ?>
                    <div class="col-sm-2 col-4 mt-4">
                        <div class="card borderr2 shadow-lsm border-0">
                            <a href="" class="d-block m-0 text-decoration-none text-dark">
                                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" class="card-img-top " alt="">
                                <div class="card-body m-0 ">
                                    <p class="text-truncate fs-7">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempora quibusdam doloribus unde obcaecati. Id, sint hic minus dolorem asperiores perspiciatis rem esse optio expedita itaque doloremque eveniet ad, velit corrupti!</p>
                                    <h6 class="card-title fs-7 fw-bold">Rp.000.000</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<?php include "../template/footerview.php" ?>
<?php include "../template/footer.php" ?>