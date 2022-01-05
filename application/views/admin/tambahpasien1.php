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
  .card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;
}

</style>   
  </head> 

   <body id="reportsPage"> 
  <div class="" id="home"> 
  <nav class="navbar navbar-expand-xl"> 
  <div class="container h-100"> 
  <a class="navbar-brand" href="http://localhost/klinik_nirmala/admin/beranda"> 
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
  <a class="nav-link" href="http://localhost/klinik_nirmala/admin/antrian/semua_antrian"> 

  <i class="far fa-file-alt"></i> 
  <span> 
  Data Antrian 
  </span> 
  </a> 
  </li> 
  
  <li > 
  <a class="nav-link" href="http://localhost/klinik_nirmala/admin/beranda/jadwal_kontrol"> 

  <i class="fas fa-address-book"></i> 
  <span> 
Jadwal kontrol 
  </span> 
  </a> 
  </li> 
  <li > 
  <a class="nav-link" href="http://localhost/klinik/admin/rekammedis"> 

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
 <div class="container-fluid my-7">
  <div class="row">
    <div class="col-md-8"> 
 <div class="card">
        <div class="card-header">Form Tambah rekam medis</div>
        <div class="card-body">
          <form action="<?= base_url('tambahpasien1') ?>" method="POST">
          <div class="form-group">
            <label class="text-dark ">Tanggal</label>
             <input type="date" name="tanggal" class="form-control" min="<?= date('Y-m-d')?>">
           <div class="form-group">
            <label>Nama Pasien</label>
            <input type="text"  name="nama" placeholder="Nama Pasien" class="form-control">
          </div>
           <div class="form-group">
            <label>Jenis Kelamin</label>
            <input type="text"  name="jenis_kelamin" placeholder="Jenis Kelamin"class="form-control">
          </div>
           <div class="form-group">
            <label>Umur</label>
            <input type="text"  name="umur" placeholder="Umur" class="form-control">
          </div>
           <div class="form-group">
            <label>Pekerjaan</label>
            <input type="text"  name="pekerjaan" placeholder="Pekerjaan" class="form-control">
          </div>
          <div class="form-group">
            <label>Alamat</label>
            <input type="text"  name="alamat" placeholder="alamat" class="form-control">
          </div>
           <div class="form-group">
            <label>diagnosa</label>
            <input type="text"  name="diagnosa" placeholder="diagnosa" class="form-control">
          </div>
          <div class="form-group">
            <label>dokter</label>
            <input type="text"  name="dokter" placeholder="dokter" class="form-control">
          </div>
           
            <button class="btn btn-block btn-success">Tambah Pasien</button>
        </form>
  
        </div>
      </div> 
      </div>


    </div>
  </div>
</body>
</html>