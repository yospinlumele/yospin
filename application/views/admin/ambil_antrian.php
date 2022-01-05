  <div class="container tm-mt-big tm-mb-big">
    <div class="row">
      <div class="col-12 mx-auto tm-login-col">
        <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="tm-block-title mb-4">Antrian Hari Ini</h2>
            </div>
          </div>
          <hr>
          <div class="text-center">
            <div class="btn btn-primary">
              <h1 class="text-white" id="a1"></h1>
            </div>
          </div>
          <hr>
          <div class="row mt-2">
            <div class="col-12">
              <form action="<?= base_url() ?>beranda/daftar" method="post">
                <div class="form-group">
                  <label for="name">Nama Pasien</label>
                  <input name="nama" type="text" class="form-control" required>
                  <textarea id="a2" class="form-control" name="no_antrian" rows="1" hidden></textarea>
                  <input type="hidden" name="tgl" id="tgl" value="<?= date('Y-m-d'); ?>">
                </div>
                <hr>
                <div class="form-group">
                  <label for="name">Keluhan Pasien</label>
                  <textarea class="form-control" name="keluhan" rows="3"></textarea>
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
        </div>
      </div>
    </div>
  </div>
  
  <footer class="tm-footer row tm-mt-small">
    <div class="col-12 font-weight-light">
      <p class="text-center text-white mb-0 px-4 small">
          Copyright &copy; <b>2021</b> All rights reserved.
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

<!-- Fungsi tombol kembali -->
 <script>
    function goBack() {
        window.history.back();
    }
</script>

</body>

</html>