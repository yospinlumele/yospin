<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Antrian</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-style.css">
  <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
</head>
<body id="reportsPage">
  <div class="" id="home">
    <div class="container h-100">
      <!-- row -->
      <div class="row tm-content-row mt-5">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block-head tm-block-h-auto text-center">
            <h2 class="tm-block-title">Antrian Yang Sedang Dilayani</h2>
          </div>
        </div>
      </div>
      <div class="row tm-content-row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <div class="tm-bg-primary-dark tm-block">
            <div class="text-center">
              <div class="btn btn-primary">
                <h1 style="font-size: 12em" id="a1"></h1>
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-lg-12">
                <h3 style="font-size: 2em" class="tm-block-info">Waktu Mulai:</h3>
              </div>
            </div>
            <div class="row text-center justify-content-center">
              <div class="col-lg-8 btn btn-primary">
                <h3 style="font-size: 5em" class="tm-block-info" id="a2"></h3>
              </div>
            </div>
            <hr>
            <div class="text-light text-center">
              <?= format_indo(date('Y-m-d')); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved.
        </p>
      </div>
    </footer>
  </div>

  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <!-- https://momentjs.com/ -->
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script src="<?= base_url() ?>assets/js/tooplate-scripts.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    setInterval(function(){
      $('#a1').load("<?= base_url('admin/antrian/dilayani') ?>")
      $('#a2').load("<?= base_url('admin/antrian/waktu_mulai') ?>")
    }, 100);
  });
  </script>

</body>

</html>