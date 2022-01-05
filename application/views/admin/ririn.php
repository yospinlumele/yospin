<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-style.css">
  
</head>
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

  .table td, .table th {
    border-top: 1px solid #415a70;
    padding: 10px 15px;
    vertical-align: middle;
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
  <p class="text-black mt-5"><b>Selamat Datang di Daftar Rekam Medis dr.Ririn Lisa Tondok</b></p> 
  </div> 
  </div> 
<div class="container-fluid my-12">
  <div class="row">
    <div class="col-md-12"> 
      <div class="card">
        <div class="card-header text-center"><b>dr.RIRIN LISA TONDOK</b></div>
        <div class="card-body">
         <table border 


         class="table table-condensed table-hover" style="background-color: #17a2b8;">
             <a href="http://localhost/klinik/tambah_pasien" class="btn btn-success btn-sm float-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
            <thead>
              <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Nama pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th> Pekerjaan</th>
                <th>alamat</th>
                <th>Diagnose</th>
                <th>dokter</th>
                 <th>aksi</th>
              </tr>
            </thead>
            <tbody>
             <?php $no = 1; ?>
              <?php foreach ($rekam_medis as $mds): ?>
              <tr>
                  <td><?= $no++ ?></td>
                  <td><?= $mds->tanggal ?></td>
                  <td><?= $mds->nama?></td>
                  <td><?= $mds->jenis_kelamin?></td>
                  <td><?= $mds->umur?></td>
                  <td><?= $mds->pekerjaan?></td>
                  <td><?= $mds->alamat?></td>
                   <td><?= $mds->diagnosa?></td>
                  <td><?= $mds->dokter ?></td>
                  <td>
                     <a class="btn btn-primary" href="<?= base_url('hapusJadwal1/'.$mds->id) ?>">Hapus</a>
                     <a class="btn btn-danger" href="<?= base_url('tambahpasien/edit-jadwal1/'.$mds->id) ?>">Edit</a>
                  </td>
              </tr> 
               <?php endforeach ?>  
            </tbody>
          </table>
        </div>
  </div>
  </div>
  <br><br>
   <br><br>
    <br><br>
     <br><br>
      <br><br>    
    </div>
  </div>
</div>
</div>
</body>
</html>
  <br><br>  

          </table>
        </div>
  </div>
  </div>
  <br><br>
   <br><br>
    <br><br>
     <br><br>
      <br><br>    
    </div>
  </div>
</div>
</div>
