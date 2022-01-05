<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>registrasi</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-style.css">

</head>

<style>
    body {
        background-image: url("../assets/img/bg.png");
    }
    .form-control {
    background-color: #adb5bd;
    color: #fff;
    border: 0;
}
.form-control {
    padding: 19px 18px;
    border-radius: 0;
    height: 20px;
}
</style>

    <!-- Page Content -->
    <div class="container">

        <!-- Heading Row -->
        <div class="row align-items-center my-3">
            <div class="col-lg-7">
                <img class style="height:450px;"img-fluid rounded mb-4 mb-lg-0 src="http://localhost/klinik/assets/1.png" alt="">
            </div>
            <!-- /.col-lg-8 -->
            <div class="col-lg-5">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 bg-warning ">Daftarkan Email Baru Anda!!</h1>
                </div>
                <form class="user" method="post" action="http://localhost/klinik/beranda/login">

                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" id="name" placeholder="Masukan Nama" name="name" value="">
                    </div>
            
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user" id="email" placeholder="Alamat Email" name="email" value="">
                                            </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="password" class="form-control form-control-user" id="password1" placeholder="Password" name="password1">
                                                    </div>
                        <div class="col-sm-6">
                            <input type="password" class="form-control form-control-user" id="password2" placeholder="Ulangi Password" name="password2">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Registrasi
                    </button>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="http://localhost/klinik/login">Sudah punya account..!</a>
                    </div>


                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    </div>

    </div>

   
</body>


<!-- Bootstrap core JavaScript -->
<script src="http://localhost/GTRANS/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/GTRANS/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>