<?php include "template/header.php" ?>
<?php include "template/navbar.php" ?>
<?php include "template/hero.php" ?>
<main class="container col-sm-9">
    <div class="unggulan mb-5">
        <h1 class="text-center my-4">Produk Unggulan</h1>
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-6 d-flex justify-content-lg-end justify-content-center position-relative">
                        <div class="position-absolute bottom-0" style="left:15%">
                            <p class="display-3 fw-bold"><span class="bg-white">Sweet</span></p>
                            <p class="display-6  fw-bolder"><span class="bg-white">Potato Cake</span></p>
                            <p class="fs-5"><a href="" class="text-decoration-none"><span class="bg-white text-dark borderr1 px-3 pb-1">Ayo lihat! <i class="bi bi-arrow-right-circle-fill"></i></span></a></p>
                        </div>
                        <!-- <p class="display-5 bg-white position-relative top-50 fw-bold" style="left:15%">Potato Cake</p> -->
                        <img class="unggulan1" src="http://localhost/rarabakeryview/assets/img/cake1.jpg" alt="">

                    </div>
                    <div class="col-sm-6 d-flex align-items-sm-end justify-content-lg-start justify-content-center">
                        <div class="row">
                            <div class="col-6">
                                <img class="unggulan2" src="http://localhost/rarabakeryview/assets/img/cucur.jpg" alt="">
                            </div>
                            <div class="col-6 ">
                                <img class="unggulan2" src="http://localhost/rarabakeryview/assets/img/cucur.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="cariKategori" class="my-4">
        <h3 class="fs-3 mb-4">Cari Kategori Apa?</h3>
        <div class="row justify-content-around g-0">
            <div class="col-2">
                <img src="http://localhost/rarabakeryview/assets/img/recblue.png" style="width: 100%;">
            </div>
            <div class="col-2">
                <img src="http://localhost/rarabakeryview/assets/img/recbrown.png" alt="" style="width: 100%;">
            </div>
            <div class="col-2">
                <img src="http://localhost/rarabakeryview/assets/img/recgreen.png" alt="" style="width: 100%;">
            </div>
            <div class="col-2">
                <img src="http://localhost/rarabakeryview/assets/img/recorange.png" alt="" style="width: 100%;">
            </div>
            <div class="col-2">
                <img src="http://localhost/rarabakeryview/assets/img/recpink.png" alt="" style="width: 100%;">
            </div>
        </div>
    </div>
    <hr>
    <div class="itemDisplay my-4">
        <h3 class="fs-3 mb-4">Yang mungkin kamu suka</h3>
        <div class="row ">
            <?php $i = 0;
            for ($i = 0; $i < 20; $i++) : ?>
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
</main>
<?php include "template/footerview.php" ?>
<?php include "template/footer.php" ?>