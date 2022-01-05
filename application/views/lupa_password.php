<body>
  <div>
    <nav class="navbar navbar-expand-xl">
      <div class="container h-100">
        <a class="navbar-brand" href="index.html">
          <h1 class="tm-site-title mb-0">APP ANTRIAN</h1>
        </a>
        <button
          class="navbar-toggler ml-auto mr-0"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-bars tm-nav-icon"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto h-100">
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>">
                <i class="fas fa-tachometer-alt"></i> Dashboard
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= base_url() ?>user/registrasi">
                <i class="far fa-user"></i> Registrasi
              </a>
            </li>
           <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" aria-expanded="false">
                 <i class="fas fa-phone-square"></i>
                 <span>
                    Info Kontak
                 </span>
              </a>
           </li>
          </ul>
          <ul class="navbar-nav h-100">
            <li class="nav-item">
              <a class="nav-link active" href="<?= base_url() ?>user">
                <i class="fas fa-sign-in-alt"></i> 
                <b>Login</b>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-12 mx-auto tm-login-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="tm-block-title mb-4">Ganti Password Anda</h2>
            </div>
          </div>
          <?= $this->session->flashdata('flash'); ?>
          <div class="row mt-2">
            <div class="col-12">
              <form action="<?= base_url('user/lupaPassword') ?>" method="post" class="tm-login-form">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>">
                  <?= form_error('email', '<small class="text-light">', '</small>'); ?>
                </div>
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-primary btn-block text-uppercase">
                    Reset Password
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>