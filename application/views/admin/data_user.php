    <div class="container">
      <div class="row">
        <div class="col">
            <p class="text-white mt-5 mb-5">Welcome back, <b><?= $user['nama']; ?></b></p>
        </div>
      </div>
      <!-- row -->
      <div class="row justify-content-center">
        <div class="col-6">
          <?= $this->session->flashdata('flash'); ?>
        </div>
      </div>
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title">Daftar User Yang Belum Aktif</h2>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">ID User</th>
                  <th scope="col" width="300">Nama</th>
                  <th scope="col" width="300">Email</th>
                  <th scope="col" colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php if (empty($data_user_n)): ?>
                <tr>
                  <td colspan="5">
                    <div class="alert alert-danger" role="alert">
                      Belum ada data!
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php $no=1; foreach ($data_user_n as $row): ?>
                  <tr>
                    <th scope="row"><b><?= $row['id']?></b></th>
                    <th scope="row"><b><?= $row['nama']?></b></th>
                    <td><b><?= $row['email']?></b></td>
                    <td><a data-toggle="modal" data-target="#exampleModal<?= $row['id']?>" class="btn btn-sm btn-info"><i class="fas fa-check-square"></i> Konfirmasi</a></td>
                    <td><a href="<?= base_url() ?>admin/beranda/hapus_user/<?= $row['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row tm-content-row">
        <div class="col-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
            <h2 class="tm-block-title">Daftar User Aktif</h2>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">ID User</th>
                  <th scope="col" width="300">Nama</th>
                  <th scope="col" width="300">Email</th>
                  <th scope="col" colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php if (empty($data_user)): ?>
                <tr>
                  <td colspan="5">
                    <div class="alert alert-danger" role="alert">
                      Belum ada data!
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php $no=1; foreach ($data_user as $row): ?>
                  <tr>
                    <th scope="row"><b><?= $row['id']?></b></th>
                    <th scope="row"><b><?= $row['nama']?></b></th>
                    <td><b><?= $row['email']?></b></td>
                    <td><a href="<?= base_url() ?>admin/antrian/riwayat_daftar/<?= $row['id']?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Riwayat Daftar</a></td>
                    <td><a href="<?= base_url() ?>admin/beranda/hapus_user/<?= $row['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Konfirmasi-->
    <?php foreach ($data_user_n as $row): ?>
    <div class="modal fade" id="exampleModal<?= $row['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tm-bg-primary-dark">
          <div class="modal-header">
            <h5 class="text-white" id="exampleModalLabel"><b>Konfirmasi User?</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="<?= base_url();?>admin/beranda/konfirmasi" method="post">
                <input type="hidden" class="form-control validate" name="id" value="<?= $row['id'] ?>">
                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control validate" name="nama" id="nama" value="<?= $row['nama'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Email:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control validate" name="nama" id="nama" value="<?= $row['email'] ?>">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Konfirmasi</button>
                </div>
              </form>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

    <footer class="tm-footer row tm-mt-small">
      <div class="col-12 font-weight-light">
        <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved.
        </p>
      </div>
    </footer>
  </div>

  <script src="<?= base_url() ?>assets/js/jquery-3.3.1.min.js"></script>
  <!-- https://jquery.com/download/ -->
  <script src="<?= base_url() ?>assets/js/moment.min.js"></script>
  <!-- https://momentjs.com/ -->
  <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
  <!-- https://getbootstrap.com/ -->
  <script src="<?= base_url() ?>assets/js/tooplate-scripts.js"></script>

</body>

</html>