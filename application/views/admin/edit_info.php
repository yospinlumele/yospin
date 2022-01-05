<div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-12 mx-auto tm-login-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="tm-block-title mb-4">Edit Informasi</h2>
            </div>
          </div>
          <div class="row mt-2">
            <div class="col-12">
              <form action="" method="post" class="tm-login-form">
                <input type="hidden" name="id" value="<?= $info['id'] ?>">
                <div class="form-group">
                  <textarea name="isi" class="form-control" rows="3"><?= $info['isi'] ?></textarea>
                  <?= form_error('isi', '<small class="text-light">', '</small>'); ?>
                </div>
                <div class="form-group mt-4">
                  <button type="submit" class="btn btn-primary btn-block text-uppercase">
                    Edit
                  </button>
                  <button class="btn btn-danger btn-block text-uppercase" onclick="goBack()">Batal</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>