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
  <p class="text-black mt-5">Selamat Datang, <b>Admin</b></p> 
  </div> 
  </div> 
 

<section class="p-5 tm-container-outer tm-bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
               <div class="row">
                            <div class="col-md-4">
                <img class="card-img-top" src="http://localhost/klinik//assets/doc1.JPG" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted font-italic">
                                </small></p>
                        <h5 class="card-title">dr.J.PALIMBONG P.,SpB</h5>
                        <p class="card-text">PUKUL 17.00-20.00 WITA</p>
                        <a href="http://localhost/klinik/palimbong" class="badge badge-info">Detail</a>
                    </div>
                </div>
                            <div class="col-md-4">
                <img class="card-img-top" src="http://localhost/klinik//uploads/gambar2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted font-italic">
                                 </small></p>
                        <h5 class="card-title">dr.RIRIN LISA TONDOK</h5>
                        <p class="card-text">PUKUL 16.00-20.00</p>
                        <a href="http://localhost/klinik/ririn" class="badge badge-info">Detail</a>
                    </div>
                </div>
                            <div class="col-md-3">
                <img class="card-img-top" src="http://localhost/klinik//assets/doc2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted font-italic">
                              </small></p>
                        <h5 class="card-title">dr. ELY YURIS Sp.N.,M.Kes</h5>
                        <p class="card-text">PUKUL 13.30-17.30</p>
                        <a href="http://localhost/klinik/ely" class="badge badge-info">Detail</a>
                    </div>
                </div>
                            <div class="col-md-3">
                <img class="card-img-top" src="http://localhost/klinik//assets/doc3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted font-italic">
                                 </small></p>
                        <h5 class="card-title">dr.AHMAD MUDASSIR,Sp.PD</h5>
                        <p class="card-text">PUKUL 18.00-20.00</p>
                        <a href="http://localhost/klinik/ahmad" class="badge badge-info">Detail</a>
                    </div>
                </div>
                <div class="col-md-4">
                <img class="card-img-top" src="http://localhost/klinik//assets/doc4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text"><small class="text-muted font-italic">
                                 </small></p>
                        <h5 class="card-title">dr.PRARINDRA KHRISANTI TORIKI, Sp.a</h5>
                        <p class="card-text">PUKUL 14.00-17.00</p>
                        <a href="http://localhost/klinik/khrisanti" class="badge badge-info">Detail</a>
                    </div>
                </div>
        <hr>
    </div>
    </div>
        </div>
    </div>
</section>
</body>
</html>