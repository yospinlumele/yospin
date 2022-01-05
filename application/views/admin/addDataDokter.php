   <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Add Data Dokter</h4>
              </div>
              <div class="card-body">
              <?php echo form_open_multipart('admin/HomeDokter/prosesDataDokter')?>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputUsername">Username</label>
                        <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputEmail4">Email</label>
                        <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword4">Password</label>
                        <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="RealName">Real Name</label>
                        <input name="name" type="text" class="form-control" id="RealName" placeholder="Real Name">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Gender">Gender</label>
                        <select name="gender" id="Gender" class="form-control">
                            <option selected>Choose...</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="Specialist">Specialist</label>
                        <input type="text" class="form-control" name="specialist" id="specialist">
                    </div>
                </div>
                <div class="form-group">
                    <label for="Bio">Bio</label>
                    <input type="text" class="form-control" id="bio" name="bio">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputAddress">No Telp</label>
                        <div class="form-row">
                        <input class="form-control col-md-2" placeholder="+62" readonly>
                        <input name="telp" type="text" class="form-control col-md-10" id="inputTelp" placeholder="85814590403" required></div>
                    </div>
                    <div class="col-md-6">
                        <label>Picture</label>
                        <input name="picture" type="file" id="Picture" style="width:100%;" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="add">Add Data</button>
                <?php echo form_close();?>
              </div>
            </div>
          </div>