    <div class="container">
        <div class="row">
            <div class="col">
                <p class="text-white mt-5">Welcome back, <b><?= $user['nama']; ?></b></p>
            </div>
        </div>
        <!-- row -->
        <div class="row justify-content-center">
          <div class="col-6">
            <?= $this->session->flashdata('antrian'); ?>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4">
            <?php foreach ($terpanggil as $panggil): ?>
            <div class="alert alert-warning text-center" role="alert">
              <strong>Antrian yang Terpanggil: <?= $panggil['no_antrian']; ?></strong>
            </div>
            <?php endforeach ?>
          </div>
        </div>
        <div class="row tm-content-row">
          <div class="col-12 tm-block-col">
            <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
              <div class="row">
                <div class="col-6">
                  <h2 class="tm-block-title">Daftar Antrian Hari Ini</h2>
                </div>
                <div class="col-6">
                  <a href="<?= base_url(); ?>admin/antrian/ambil_nomor" class="btn btn-success btn-sm float-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
                </div>
              </div>
              <table class="table text-center">
                <thead>
                  <tr>
                    <th scope="col">ID User</th>
                    <th scope="col">No Antrian</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Keluhan</th>
                    <th scope="col" colspan="2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($antrian)): ?>
                  <tr>
                    <td colspan="6">
                      <div class="alert alert-danger" role="alert">
                        Belum ada data!
                      </div>
                    </td>
                  </tr>
                  <?php endif; ?>
                  <?php $no=1; foreach ($antrian as $antri): ?>
                    <tr>
                      <th scope="row"><b><?= $antri['id_user']?></b></th>
                      <th scope="row"><b><?= $antri['no_antrian']?></b></th>
                      <td><b><?= $antri['nama']?></b></td>
                      <td><b><?= format_indo(date('Y-m-d', strtotime($antri['tgl']))); ?></b></td>
                      <td><b><?= $antri['keluhan']?></b></td>
                      <td><a data-toggle="modal" data-target="#exampleModal<?= $antri['id']?>" class="btn btn-sm btn-info">Panggil</a></td>
                      <td><a href="<?= base_url() ?>admin/beranda/hapus/<?= $antri['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- row -->
        <div class="row tm-content-row">
            <div class="col-12 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-taller tm-block-scroll">
                    <div class="row">
                      <div class="col-6">
                        <h2 class="tm-block-title">Daftar Antrian Besok</h2>
                      </div>
                    </div>
                    <table class="table text-center">
                        <thead>
                            <tr>
                              <th scope="col">No Antrian</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tanggal</th>
                              <th scope="col">Keluhan</th>
                              <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php if (empty($antrian2)): ?>
                          <tr>
                            <td colspan="5">
                              <div class="alert alert-danger" role="alert">
                                Belum ada data!
                              </div>
                            </td>
                          </tr>
                          <?php endif; ?>
                          <?php $no=1; foreach ($antrian2 as $antri): ?>
                            <tr>
                              <th scope="row"><b><?= $antri['no_antrian']?></b></th>
                              <td><b><?= $antri['nama']?></b></td>
                              <td><b><?= format_indo(date('Y-m-d', strtotime($antri['tgl']))); ?></b></td>
                              <td><b><?= $antri['keluhan']?></b></td>
                              <td><a href="<?= base_url() ?>admin/beranda/hapus/<?= $antri['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                            </tr>
                          <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Panggil Antrian-->
    <?php foreach ($antrian as $antri): ?>
    <div class="modal fade" id="exampleModal<?= $antri['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content tm-bg-primary-dark">
          <div class="modal-header">
            <h5 class="text-white" id="exampleModalLabel"><b>Panggil Antrian</b></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <form action="<?= base_url();?>admin/antrian/panggil" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $antri['id']?>">
                <input type="hidden" name="no_antrian" value="<?= $antri['no_antrian']?>">
                <div class="text-center mb-3">
                  <div class="btn btn-primary">
                    <h1 class="text-white"><?= $antri['no_antrian']?></h1>
                  </div>
                </div>
                <hr>
                <div class="form-group row">
                  <label for="nama" class="col-sm-4 col-form-label">Nama Pasien:</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control validate" name="nama" id="nama" value="<?= $antri['nama'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Keluhan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="kategori" id="kategori" value="<?= $antri['keluhan'] ?>">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-4 col-form-label">Lama Pemeriksaan (Menit)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="lama_pemeriksaan" id="lama_pemeriksaan">
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                  <button type="submit" class="btn btn-primary">Panggil</button>
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
          Copyright &copy; <b>2018</b> All rights reserved.
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