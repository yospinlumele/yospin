<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-style.css">
  

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<style>
  body {
  font-family: Roboto, Helvetica, Arial, sans-serif;
  background-color: #f8f9fa;
  overflow-x: hidden;
}
.form-control {
  background-color: #e9ecef;
  color: #fff;
  border: 0;
}
.form-control {
  padding: 19px 18px;
  border-radius: 0;
  height: 10px;
}
.form-group {
  margin-bottom: 15px;
}
  .jumbotron{
    background: url('<?= base_url("assets/bg1.jpg") ?>');

    
   }
  .bayangan{
    text-shadow: 3px 2px 1px #3c3c3c;
  }

</style>   

  <!-- 
  Product Admin CSS Template 
  https://templatemo.com/tm-524-product-admin 
  --> 
  </head> 
  <body id="reportsPage"> 
  <div class="" id="home"> 
  <nav class="navbar navbar-expand-xl"> 
  <div class="container h-100"> 
  <a class="navbar-brand" href="http://localhost/klinik/admin/dashboard"> 
  <h1 class="tm-site-title mb-0">klinik nirmala</h1> 
  </a> 
  <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" 
  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
  <i class="fas fa-bars tm-nav-icon"></i> 
  </button> 
  <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
  <ul class="navbar-nav mx-auto h-100"> 
  <li class="active"> 
  <a class="nav-link" href="http://localhost/klinik/admin/dashboard"> 

  <i class="fas fa-fw fa-tachometer-alt"></i> 
  Dashboard 
  <span class="sr-only">(current)</span> 
  </a> 
  </li> 
  
  <li > 
  <a class="nav-link" href="http://localhost/klinik/admin/jadwal_kontrol"> 

  <i class="fas fa-address-book"></i> 
  <span> 
Jadwal kontrol 
  </span> 
  </a> 
  </li> 
  <li > 
  <a class="nav-link" href="http://localhost/klinik/rekammedis"> 

  <i class="fas fa-phone-square"></i> 
  <span> 
  Rekam medis
  </span> 
  </a> 
  </li> 
  <li > 
  <a class="nav-link dropdown-toggle" href="http://localhost/klinik/dokter1"> 

  <i class="fas fa-info-circle"></i> 
  <span> 
  Informasi dokter
  </span> 
  </a> 
  </li> 
  </ul> 
  <ul class="navbar-nav"> 
  <li class="nav-item"> 
  <a class="nav-link" href="<?= base_url('login'); ?>">

  <i class="fas fa-sign-out-alt"></i> 
  <b>Logout</b> 
  </a> 
  </li> 
  </ul> 
  </div> 
  </div> 
  </nav> <div class="container"> 
  <div class="row"> 
  <div class="col"> 
  <p class="text-black mt-5">Selamat Datang, <b>Admin</b></p> 
  </div> 
  </div> 
  <!-- row --> 
 <div class="row justify-content-center">
          <div class="col-6">
            <?= $this->session->flashdata('antrian'); ?>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <?php foreach ($terpanggil as $panggil): ?>
            <div class="alert alert-warning text-center" role="alert">
              <strong>Antrian yang Terpanggil: <?= $panggil['no_antrian']; ?></strong>
            </div>
            <?php endforeach ?>
          </div>
        </div>
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
              <div class="row">
                <div class="col-6">
                  <h2 class="tm-block-title">Daftar Antrian Hari Ini</h2>
                </div>
                <div class="col-6">
                  <a href="<?= base_url(); ?>admin/antrian/ambil_nomor" class="btn btn-success btn-sm float-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                </div>
              </div>
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">No Antrian</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col" colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($antrian)): ?>
                  <tr>
                    <td colspan="6">
                      <div class="alert alert-danger" role="alert">
                        Belum ada data!
                      </div>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php $no=1; foreach ($antrian as $antri): ?>
                    <tr>
                      <th scope="row"><b><?= $antri['id_user']?></b></th>
                      <th scope="row"><b><?= $antri['no_antrian']?></b></th>
                      <td><b><?= $antri['nama']?></b></td>
                      <td><b><?= format_indo(date('Y-m-d', strtotime($antri['tgl']))); ?></b></td>
                      <td><b><?= $antri['keluhan']?></b></td>
                      <td><a data-toggle="modal" data-target="#exampleModal<?= $antri['id']?>" class="btn btn-sm btn-info">Panggil</a></td>
                      <td><a href="<?= base_url() ?>admin/beranda/hapus/<?= $antri['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="tm-block-title">Daftar Antrian Besok</h2>
                      </div>
                    </div>
                    <table class="table text-center">
                        <thead>
                            <tr>
                              <th scope="col">No Antrian</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Keluhan</th>
                              <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php if (empty($antrian2)): ?>
                          <tr>
                            <td colspan="5">
                              <div class="alert alert-danger" role="alert">
                                Belum ada data!
                              </div>
                            </td>
                          </tr>
                          <?php endif; ?>
                          <?php $no=1; foreach ($antrian2 as $antri): ?>
                            <tr>
                              <th scope="row"><b><?= $antri['no_antrian']?></b></th>
                              <td><b><?= $antri['nama']?></b></td>
                              <td><b><?= format_indo(date('Y-m-d', strtotime($antri['tgl']))); ?></b></td>
                              <td><b><?= $antri['keluhan']?></b></td>
                              <td><a href="<?= base_url() ?>admin/beranda/hapus/<?= $antri['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Panggil Antrian-->
    <?php foreach ($antrian as $antri): ?>
    <div class="modal fade" id="exampleModal<?= $antri['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tm-bg-primary-dark">
          <div class="modal-header">
            <h5 class="text-white" id="exampleModalLabel"><b>Panggil Antrian</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="<?= base_url();?>admin/antrian/panggil" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $antri['id']?>">
                <input type="hidden" name="no_antrian" value="<?= $antri['no_antrian']?>">
                <div class="text-center mb-3">
                  <div class="btn btn-primary">
                    <h1 class="text-white"><?= $antri['no_antrian']?></h1>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama Pasien:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control validate" name="nama" id="nama" value="<?= $antri['nama'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Keluhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $antri['keluhan'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Lama Pemeriksaan (Menit)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lama_pemeriksaan" id="lama_pemeriksaan">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Panggil</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
  <!-- Panggil Antrian--> 
  
    <!-- Footer -->
  <footer id="main-footer" class="text-center tm-bg-primary-dark py-5">
            <div class="container mb-3">
                <div class="row">
                    <div class="text-md-left text-white col-md-4 mr-auto">
                        <h5><b> KLINIK NIRMALA </b></h5>
                        <img class style="height: 120px;" src="http://localhost/klinik/assets/bg.jpg">
                    </div>
                    <div class="text-md-left text-white col-md-4 mt-4 mt-md-0">
                        <h5><b> CONTACT KLINIK NIRMALA</b></h5>
                        <div><i class="fas fa-envelope fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="G-mail"></i>Yospinbarrunglumele@gmail.com</div>
                        <div><i class="fas fa-phone fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="Phone"></i>082349486057</div>
                        <div><i class="fas fa-globe fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="Website"></i><b>https://nirmala.com</b></div>
                        <div class="pt-3">
                            <a href="#" class="text-primary mr-2">
                                <i class="fab fa-facebook fa-lg" data-toggle="tooltip" data-placement="top" title="Facebook"></i>
                            </a>
                        <a href=" #" class="text-danger mr-2">
                                    <i class="fab fa-instagram fa-lg" data-toggle="tooltip" data-placement="top" title="Instagram"></i>
                        </a>
                        <a href=" #" class="text-white mr-2">
                                        <i class="fab fa-google-plus fa-lg" data-toggle="tooltip" data-placement="top" title="Google"></i>
                        </a>
                    </div>
                </div>
              </div>
            </div>
            </div>
        </div>

    </footer>

  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <!-- https://momentjs.com/ -->
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script src="<?= base_url() ?>assets/js/tooplate-scripts.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
    setInterval(function(){
      $('#a1').load("<?= base_url('beranda/realtime') ?>")
      $('#a2').load("<?= base_url('beranda/realtime') ?>")

      $('#b1').load("<?= base_url('beranda/realtime2') ?>")
      $('#b2').load("<?= base_url('beranda/realtime2') ?>")
    }, 100);
  });
  </script>
</body>
</html>