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
  <div class="container my-5">
  <div class="row">
    <div class="col-md-9"> 
      <div class="card">
        <div class="card-header text-center">Jadwal Kontrol</div>
        <div class="card-body">
          <table class="table table-condensed table-hover">
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Dokter</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no = 1; ?>
              <?php foreach ($kontrol as $ktl): ?>
              <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $ktl->tanggal ?></td>
                  <td><?= $ktl->nama_pasien ?></td>
                  <td><?= $ktl->jenis_kelamin?></td>
                  <td><?= $ktl->umur?></td>
                  <td><?= $ktl->alamat ?></td>
                  <td><?= $ktl->dokter ?></td>
                  <td>
                     <a class="btn btn-primary" href="<?= base_url('hapusJadwal/'.$ktl->id) ?>">Hapus</a>
                     <a class="btn btn-danger" href="<?= base_url('jadwal_kontrol/edit_jadwal/'.$ktl->id) ?>">Edit</a>
                  </td>
              </tr> 
               <?php endforeach ?>  
            </tbody>
          </table>
        </div>
  </div>
  </div>
      <div class="col-md-3">
      <div class="card">
        <div class="card-header">Form Jadwal Kontrol</div>
        <div class="card-body">
          <form action="<?= base_url('tambahkontrol') ?>" method="POST">
          <div class="form-group">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" min="<?= date('Y-m-d')?>">
          </div>
           <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text"  name="nama_pasien" placeholder="nama_pasien" class="form-control">
          </div>
           <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text"  name="jenis_kelamin" placeholder="jenis_kelamin"class="form-control">
          </div>
           <div class="form-group">
            <label>Umur</label>
            <input type="text"  name="umur" placeholder="Umur" class="form-control">
          </div>
           <div class="form-group">
            <label>alamat</label>
            <input type="text"  name="alamat" placeholder="alamat" class="form-control">
          </div>
           <div class="form-group">
            <label>Dokter</label>
            <input type="text"  name="dokter" placeholder="dokter" class="form-control">
          </div>
            <button class="btn btn-block btn-success">Tambah Data pasien</button>
        </form>
        </div>
      </div> 
        
      </div>
    </div>
  </div>
</body>
</html>