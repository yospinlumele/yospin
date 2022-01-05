    <div class="container">
      <!-- row -->
      <div class="row tm-content-row mt-5">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title">Riwayat Pendaftaran</h2>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">No Antrian</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Keluhan</th>
                </tr>
              </thead>
              <tbody>
                <?php $no=1; foreach ($riwayat as $row): ?>
                  <tr>
                    <th scope="row"><b><?= $row['no_antrian']?></b></th>
                    <td><b><?= $row['nama']?></b></td>
                    <td><b><?= format_indo(date('Y-m-d', strtotime($row['tgl']))); ?></b></td>
                    <td><b><?= $row['keluhan']?></b></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
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

</body>

</html>