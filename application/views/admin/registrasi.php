  <div class="row tm-content-row tm-mt-big justify-content-center">
    <div class="tm-block-col tm-col-account-settings">
      <div class="tm-bg-primary-dark tm-block tm-block-settings">
        <h2 class="tm-block-title text-center mb-4">Buat Akun Baru</h2>
        <form action="" method="post" class="tm-signup-form row justify-content-center">
          <div class="form-group col-lg-8">
            <label for="nama">Nama Lengkap</label>
            <input value="<?= set_value('nama'); ?>" 
              id="nama"
              name="nama"
              type="text"
              class="form-control validate">
              <?= form_error('nama', '<small class="text-light">', '</small>'); ?>
          </div>
          <div class="form-group col-lg-8">
            <label for="email">Email</label>
            <input value="<?= set_value('email'); ?>"
              id="email"
              name="email"
              type="text"
              class="form-control validate">
              <?= form_error('email', '<small class="text-light">', '</small>'); ?>
          </div>
          <div class="row">
            <div class="form-group col-lg-6">
              <label for="password1">Password</label>
              <input
                id="password1"
                name="password1"
                type="password"
                class="form-control validate">
                <?= form_error('password1', '<small class="text-light">', '</small>'); ?>
            </div>
            <div class="form-group col-lg-6">
              <label for="password2">Re-enter Password</label>
              <input
                id="password2"
                name="password2"
                type="password"
                class="form-control validate"
              />
            </div>
          </div>
          <div class="col-8">
            <button type="submit" class="btn btn-primary btn-block text-uppercase mt-3">
              Registrasi Akun
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>