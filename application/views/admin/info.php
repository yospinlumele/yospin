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
            <div class="row">
              <div class="col-6">
                <h2 class="tm-block-title">Kelola Informasi</h2>
              </div>
              <div class="col-6">
                <a href="<?php echo base_url(); ?>admin/info/tambah" class="btn btn-success btn-sm float-right"><i class="fa fa-plus-square" aria-hidden="true"></i> Tambah Data</a>
              </div>
            </div>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col" width="80">No</th>
                  <th scope="col" width="500">Informasi</th>
                  <th scope="col">Tgl</th>
                  <th scope="col" colspan="2">Aksi</th>
                </tr>
              </thead>
              <tbody>
              <?php if (empty($informasi)): ?>
                <tr>
                  <td colspan="5">
                    <div class="alert alert-danger" role="alert">
                      Belum ada data!
                    </div>
                  </td>
                </tr>
                <?php endif; ?>
                <?php $no=1; foreach ($informasi as $row): ?>
                  <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <th scope="row"><b><?= $row['isi']?></b></th>
                    <td><b><?= $row['tgl']?></b></td>
                    <td><a href="<?= base_url() ?>admin/info/edit/<?= $row['id']?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                    <td><a href="<?= base_url() ?>admin/info/hapus/<?= $row['id']?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus Data?');"><i class="fas fa-trash"></i> Hapus</a></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>