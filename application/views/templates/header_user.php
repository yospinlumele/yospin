<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $judul; ?></title>
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
 <nav class="navbar navbar-expand-xl">
   <div class="container h-100">
      <a class="navbar-brand" href="index.html">
         <h1 class="tm-site-title mb-0">klinik nirmala</h1>
      </a>
      <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars tm-nav-icon"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mx-auto h-100">
            <li <?= $this->uri->segment('2') == 'user'  ? 'class="active"': '' ?>>
               <a class="nav-link" href="<?= base_url(); ?>beranda/user">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                   Dashboard
                  <span class="sr-only">(current)</span>
               </a>
            </li>
            <li <?= $this->uri->segment('2') == 'riwayat_daftar'  ? 'class="active"': '' ?>>
               <a class="nav-link dropdown-toggle" href="<?= base_url(); ?>beranda/riwayat_daftar">
                  <i class="far fa-file-alt"></i>
                  <span>
                     Riwayat Pendaftaran
                  </span>
               </a>
            </li>
            <li <?= $this->uri->segment('2') == 'kontak_u'  ? 'class="active"': '' ?>>
               <a class="nav-link" href="<?= base_url(); ?>beranda/kontak_u">
                  <i class="fas fa-phone-square"></i>
                  <span>
                     Info Kontak
                  </span>
               </a>
            </li>
         </ul>
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link" href="<?= base_url() ?>user/logout">
                  <i class="fas fa-sign-in-alt"></i> 
                  <b>Logout</b>
               </a>
            </li>
         </ul>
      </div>
   </div>
 </nav>