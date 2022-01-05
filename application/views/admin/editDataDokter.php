  <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Edit Data Dokter</h4>
              </div>

              <div class="card-body">
              <?php foreach($dokter as $as => $row) {?>
              <?php echo form_open_multipart('admin/HomeDokter/editData', '', array('id_dokter' => $row->id_dokter, 'oldPhoto' => $row->gambar))?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputUsername">Username</label>
                        <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username" value="<?= $row->username?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?= $row->email?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password" value="<?= $row->password?>">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="RealName">Real Name</label>
                        <input name="name" type="text" class="form-control" id="RealName" placeholder="Real Name" value="<?= $row->nama_dokter?>">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Gender">Gender</label>
                        <select name="gender" id="Gender" class="form-control">
                            <?php if($row->jk == "Male") {?>
                                <option>Choose...</option>
                                <option value="Male" selected>Male</option>
                                <option value="Female">Female</option>
                            <?php }elseif($row->jk == "Female"){?>
                                <option>Choose...</option>
                                <option value="Male">Male</option>
                                <option value="Female" selected>Female</option>
                            <?php }?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Specialist">Specialist</label>
                        <input type="text" class="form-control" name="specialist" id="specialist" value="<?= $row->spesialisasi?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio" value="<?= $row->bio?>">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">No Telp</label>
                        <input name="telp" type="text" class="form-control" id="inputTelp" placeholder="+62" value="<?= $row->no_telp?>">
                    </div>
                    <div class="col-md-4">
                        <label>Picture</label><br>
                        <input name="picture" type="file" id="Picture" style="width:100%;" class="form-control">
                    </div>
                    <div class="form-group col-md-2">
                        <img src="<?= base_url('assets/images/User/'.$row->gambar)?>" alt="<?= $row->gambar?>" height="100" width="100" class="img-circle">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="edit">Edit Data</button>
                <?php form_close();?>
              <?php }?>
              </div>
            </div>
          </div>