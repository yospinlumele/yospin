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

</head>
<body id="reportsPage">
  <div class="" id="home">
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
          <a class="navbar-brand" href="<?= base_url() ?>admin/beranda">
            <h1 class="tm-site-title mb-0">App Antrian</h1>
          </a>
          <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars tm-nav-icon"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto h-100">
                  <li <?= $this->uri->segment('3') == ''  ? 'class="active"': '' ?>>
                      <a class="nav-link" href="<?= base_url() ?>admin/beranda">
                          <i class="fas fa-fw fa-tachometer-alt"></i>
                          Dashboard
                          <span class="sr-only">(current)</span>
                      </a>
                  </li>
                  <li <?= $this->uri->segment('3') == 'semua_antrian' ? 'class="active"': '' ?>>
                      <a class="nav-link" href="<?= base_url() ?>admin/antrian/semua_antrian">
                          <i class="far fa-file-alt"></i>
                          <span>
                              Data Antrian
                          </span>
                      </a>
                  </li>
                  <li <?= $this->uri->segment('3') == 'registrasi' ? 'class="active"': '' ?>>
                      <a class="nav-link" href="<?= base_url() ?>admin/beranda/registrasi">
                          <i class="far fa-user"></i>
                          Registrasi
                      </a>
                  </li>
                  <li <?= $this->uri->segment('3') == 'data_user' ? 'class="active"': '' ?>>
                      <a class="nav-link" href="<?= base_url() ?>admin/beranda/data_user">
                          <i class="fas fa-address-book"></i>
                          <span>
                              Data User
                          </span>
                      </a>
                  </li>
                  <li <?= $this->uri->segment('2') == 'kontak' ? 'class="active"': '' ?>>
                    <a class="nav-link" href="<?= base_url() ?>admin/kontak/index">
                       <i class="fas fa-phone-square"></i>
                       <span>
                          Kontak
                       </span>
                    </a>
                  </li>
                  <li <?= $this->uri->segment('2') == 'info' ? 'class="active"': '' ?>>
                    <a class="nav-link dropdown-toggle" href="<?= base_url() ?>admin/info/index">
                       <i class="fas fa-info-circle"></i>
                       <span>
                          Informasi
                       </span>
                    </a>
                  </li>
              </ul>
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link" href="<?= base_url() ?>user/logout">
                        <i class="fas fa-sign-out-alt"></i>
                          <b>Logout</b>
                      </a>
                  </li>
              </ul>
          </div>
      </div>
    </nav>