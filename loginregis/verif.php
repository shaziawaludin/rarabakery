<?php
include "master/header.php";
?>

<div class="container text-center">
    <h1 class="mt-5 text-brown "><strong>Verifikasi</strong></h1>
    <h5 class="mt-4">Masukkan Kode Verifikasi</h5>
    <p class="text-muted">Kode verifikasi telah dikirim melalui email ke abcd@gmail.com</p>

    <div class="row m-4 justify-content-center">
        <div class="col-sm-4 mb-4">
            <form action="">
                <input class="form-control form-control-lg borderr2 text-center" type="text" aria-label="kodeVerifikasi" maxlength="4">
                <button type="submit" class="btn btn-warning btn-lg mt-4 text-white"><b>Verivikasi</b></button>
            </form>
        </div>
        <p class="text-muted m-0"><small>tidak menerima email?</small></p>
        <p><a href="" class="text-decoration-none m-0 text-brown"><small>Kirim ulang</small></a></p>
    </div>

</div>

<?php
include "master/footer.php";
?>