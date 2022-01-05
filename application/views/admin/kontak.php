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
                <h2 class="tm-block-title">Kelola Kontak</h2>
              </div>
            </div>
            <table class="table text-center">
              <thead>
                <tr>
                  <th scope="col">Email</th>
                  <th scope="col">Telepon</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th><b><?= $kontak['email']?></b></th>
                  <td><b><?= $kontak['telepon']?></b></td>
                  <td><b><?= $kontak['alamat']?></b></td>
                  <td><a href="<?= base_url() ?>admin/kontak/edit/<?= $kontak['id']?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i> Edit</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>