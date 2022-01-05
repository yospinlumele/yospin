<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Beranda</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="http://localhost/klinik/assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="http://localhost/klinik/assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="http://localhost/klinik/assets/css/templatemo-style.css">
  
<title>Beranda</title>
  <link rel="stylesheet" href="http://localhost/klinik/assets/css/bootstrap.min.css">
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
  height: 20px;
}
.form-group {
  margin-bottom: 15px;
}
  .jumbotron{
    background: url('http://localhost/klinik/assets/foto.jpg');
    background-repeat: no-repeat;
    background-size: 145%;

    
   }
  .bayangan{
    text-shadow: 3px 2px 1px #3c3c3c;
  }
.row {
 
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
.navbar {
  height: 70px;
  background-color: #567086;
  padding: 0;
}
.nav-link {
  color: #fff;
  height: 70px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  font-size: 90%;
}
</style>  
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">KLINIK NIRMALA</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost/klinik/beranda"><i class="fas fa-home"></i> Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                <li class="nav-item">
                  <a class="nav-link" href="http://localhost/klinik/registrasi">
                     <i class="far fa-user"></i>
                     Daftar Nomor Antrian
                  </a>
               </li>
               <li class="nav-item dropdown">
                  <a class="nav-link" href="http://localhost/klinik/jadwal" role="button" aria-expanded="false">
                     <i class="fas fa-phone-square"></i>
                     <span>
                        Jadwal Kontrol
                     </span>
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="http://localhost/klinik/user/registrasi">
                     <i class="far fa-user"></i>
                     Dokter
                  </a>
               </li>
                </ul>
            </div>
        </div>
    </nav>

     <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
              <div class="row">
                <div class="col-6">
                  <h2 class="tm-block-title text-center">DAFTAR ANTRIAN PASIEN</h2>
                </div>
                
              </div>
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">Nomor</th>
                    <th scope="col">Nama Pasien</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Telepon/Hp</th>
                    <th scope="col">Agama</th>
                  </tr>
                </thead>
               
              </table>
            </div>
          </div>
        </div>
        <!-- row -->
       