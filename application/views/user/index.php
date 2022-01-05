    <div class="container">
      <div class="row justify-content-center mt-4">
        <?php  foreach ($informasi as $row):?>
        <div class="col-8">
          <div class="alert alert-info text-center" role="alert">
            <strong><?= $row['isi'] ?></strong>
            <div class="text-muted"><?= format_indo(date('Y-m-d', strtotime($row['tgl']))); ?></div>
          </div>
        </div>
        <?php endforeach;?>
      </div>
      <div class="row">
        <div class="col-4">
            <p class="text-white mt-5 mb-5">Selamat Datang, <b><?= $user['nama']; ?></b></p>
        </div>
        <div class="col-8">
          <div class="alert alert-warning alert-dismissible fade show mt-5 mb-5 text-center" role="alert">
            Nomor antrian anda hari ini adalah :<strong> <?= $info['no_antrian']; ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div>
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block-head tm-block-h-auto text-center">
            <h2 class="tm-block-title">Antrian Yang Sedang Dilayani</h2>
          </div>
        </div>
      </div>
      <div class="row tm-content-row justify-content-center">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <?php if (empty($info_pelayanan)): ?>
            <div class="alert alert-danger text-center" role="alert">
              Pelayanan Belum Dimulai!
            </div>
          <?php endif; ?>
          <?php  foreach ($info_pelayanan as $info_p):?>
          <div class="tm-bg-primary-dark tm-block">
            <div class="text-center">
              <div class="btn btn-primary">
                <h1 class="text-white"><?= $info_p['no_antrian']; ?></h1>
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-lg-12">
                <h3 class="tm-block-info">Waktu Mulai:</h3>
              </div>
            </div>
            <div class="row text-center justify-content-center">
              <div class="col-lg-8 btn btn-primary">
                <h3 class="tm-block-info"><?= $info_p['waktu_mulai']; ?></h3>
              </div>
            </div>
            <hr>
            <div class="row text-center">
              <div class="col-lg-12">
                <h3 class="tm-block-info">Lama Pelayanan:</h3>
              </div>
            </div>
            <div class="row text-center justify-content-center">
              <div class="col-lg-8 btn btn-primary">
                <h3 class="tm-block-info"><?= $info_p['lama_pemeriksaan']; ?> Menit</h3>
              </div>
            </div>
            <hr>
            <div class="text-light text-center">
              <?= format_indo(date('Y-m-d')); ?>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
      <hr>
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block-head tm-block-h-auto text-center">
            <h2 class="tm-block-title">Nomor Antrian</h2>
          </div>
        </div>
      </div>
      <!-- row -->
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <div class="tm-bg-primary-dark tm-block">
            <h2 class="tm-block-title">Hari Ini</h2>
            <hr>
            <div class="text-center">
              <div class="btn btn-primary">
                <h1 class="text-white" id="a1"></h1>
              </div>
            </div>
            <hr>
            <form action="<?= base_url() ?>beranda/daftar" method="post">
              <div class="form-group">
                <label for="name">Nama Pasien</label>
                <input name="nama" type="text" class="form-control" value="<?= $user['nama']; ?>" required>
                <textarea id="a2" class="form-control" name="no_antrian" rows="1" hidden></textarea>
                <input type="hidden" name="tgl" id="tgl" value="<?= date('Y-m-d'); ?>">
              </div>
              <hr>
              <div class="form-group">
                <label for="name">Keluhan Pasien</label>
                <textarea class="form-control" name="keluhan" rows="3"></textarea>
                <input name="id_user" type="hidden" class="form-control" value="<?= $user['id']; ?>">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                  Ambil Nomor
                </button>
              </div>
              <hr>
              <div class="text-light text-center">
                <?= format_indo(date('Y-m-d')); ?>
              </div>
            </form>
          </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6 tm-block-col">
          <div class="tm-bg-primary-dark tm-block">
            <h2 class="tm-block-title">Besok</h2>
            <hr>
            <div class="text-center">
              <div class="btn btn-primary">
                <h1 class="text-white" id="b1"></h1>
              </div>
            </div>
            <hr>
            <form action="<?= base_url() ?>beranda/daftar" method="post">
              <div class="form-group">
                <label for="name">Nama Pasien</label>
                <input name="nama" type="text" class="form-control" required>
                <textarea id="b2" class="form-control" name="no_antrian" rows="1" hidden></textarea>
                <input type="hidden" name="tgl" id="tgl" value="<?= date('Y-m-d', strtotime('tomorrow')); ?>">
              </div>
              <hr>
              <div class="form-group">
                <label for="name">Keluhan Pasien</label>
                <textarea class="form-control" name="keluhan" rows="3"></textarea>
                <input name="id_user" type="hidden" class="form-control" value="<?= $user['id']; ?>">
              </div>
              <div class="col">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                  Ambil Nomor
                </button>
              </div>
              <hr>
              <div class="text-light text-center">
                <?= format_indo(date('Y-m-d', strtotime('tomorrow'))); ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2018</b> All rights reserved.
        </p>
      </div>
    </footer>

  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <!-- https://momentjs.com/ -->
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script src="<?= base_url() ?>assets/js/tooplate-scripts.js"></script>
  <script src="<?= base_url() ?>assets/js/jquery.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
    setInterval(function(){
      $('#a1').load("<?= base_url('beranda/realtime') ?>")
      $('#a2').load("<?= base_url('beranda/realtime') ?>")

      $('#b1').load("<?= base_url('beranda/realtime2') ?>")
      $('#b2').load("<?= base_url('beranda/realtime2') ?>")
    }, 100);
  });
  </script>
  <!-- <script>
    $(document).idle({
        onIdle: function(){
            window.location="<?= base_url() ?>user/logout";                
        },
        idle: 50000
    });
</script> -->
<!-- <script type="text/javascript">
  setTimeout(function() {
    window.location = "<?= base_url() ?>user/logout";
  }, 5000);
</script> -->
</body>

</html>