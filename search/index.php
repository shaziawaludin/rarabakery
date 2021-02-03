<?php include "../template/header.php" ?>
<?php include "../template/navbar.php" ?>
<?php include "../template/hero.php" ?>

<main>
    <div class="container col-md-9">
        <div class="borderr1 shadow-sm py-2 px-5">Beranda > Kategori Utama > Kategori</div>
        <div class="row gx-4 mt-3">
            <!-- sebelah kiri -->
            <div class="col-4 col-md-3">
                <div class="card borderr2">
                    <div class="card-header text-center">
                        Filter
                    </div>
                    <div class="card-body m-0 p-0 pb-3">
                        <div class="search border-bottom ">
                            <form class="d-flex m-0 p-1">
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text borderr2 border-end-0 bg-white" id="addon-wrapping">
                                        <button type="submit" class="border-0 bg-white"><i class="bi bi-search"></i></button></span>
                                    <input type="text" class="form-control borderr2 border-start-0" aria-describedby="addon-wrapping">
                                </div>
                            </form>
                        </div>
                        <div class="p-2">
                            <p class="fs-5 fw-bold">Harga</p>
                            <form action="">
                                <input type="number" class="form-control form-control-sm borderr2 mb-3" id="minprice" placeholder="Minimum">
                                <input type="number" class="form-control form-control-sm borderr2" id="maxprice" placeholder="Maksimum">
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- sebelah kanan -->
            <div class="col-8 col-md-9">
                <div class="d-flex justify-content-end">
                    <p class="m-0 me-2">Urutkan</p>
                    <div class="col-sm-2">
                        <select class="form-select form-select-sm m-0 borderr2" aria-label="Default select example">
                            <option selected>Urutan</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Threeeeeeee</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <?php $i = 0;
                    for ($i = 0; $i < 24; $i++) : ?>
                        <div class="col-lg-3 col-sm-4 col-6 mt-4">
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
                <!-- pagination -->
                <nav aria-label="Page navigation" class="mt-4">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link d-block" href="#">&laquo;</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">&raquo;</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

</main>
<?php include "../template/footerview.php" ?>
<?php include "../template/footer.php" ?>