<?php
include "master/header.php";
?>
<div class="logincontainer loginbg">
    <div class="container">
        <div class="text-center pt-5">
            <a href="" class="text-center"><img src="../assets/img/raralogo.jpg" alt="" class="raralogo"></a>
        </div>
        <div class="row justify-content-center mt-3 mb-5">
            <div class="col-sm-3">
                <div class="card shadow-sm border-light borderr1">
                    <div class="card-body">
                        <p class="fw-bold">Masuk</p>
                        <form action="" method="" class="mb-4">
                            <div class="mt-4 text-start has-validation">
                                <label for="uid" class="form-label text-muted"><small>Email / No Telepon</small></label>
                                <input type="text" class="form-control borderr2" id="uid" placeholder="mail@domain.com" required>
                                <p class="text-muted mt-2"><small>Contoh: mail@domain.com</small></p>
                            </div>
                            <div class="mt-3 text-start has-validation">
                                <label for="password" class="form-label text-muted"><small>Kata Sandi</small></label>
                                <input type="password" class="form-control borderr2" id="password" required>
                            </div>
                            <div class="mt-4 d-grid gap-2">
                                <button type="submit" class="btn borderr2 btn-warning text-white fs-5"><strong>Daftar</strong></button>
                            </div>
                        </form>

                        <p class="text-muted text-center">Belum punya akun? <a href="" class="text-muted text-decoration-none fw-bold">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>

        <p class="text-center"><small>Rara Bakery &copy;2020-2021</small></p>
    </div>
</div>
<?php
include "master/footer.php";
?>