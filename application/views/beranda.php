  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
    <div class="col-md-8">
      <br><br><br>
    <b><h1 class="display-5 text-white bayangan">Selamat Datang di Klinik Nirmala </h1></b>
        <b><h5 class="text-white bayangan">Anda dapat melakukan pendaftaran pasien dengan Aman dan Mudah</h5></b> 
       
        <h5><div style="width:50%; height:30%;" class="btn btn-dark btn-lg"><b>NOMOR ANTRIAN TUNGGU</b>
               <h1 style="font-size: 500%;" class="text-white" id="b1"></h1>
                <h5><?= format_indo(date('Y-m-d'));?></h5>
              <h5></div>
      </div>
  
      <div class="col-md-4">
        <form action="<?= base_url('daftar_antrian') ?>" method="POST">
          <div class="form-group">
                <div class="col-12 text-center">
                <h4 class=" text-white">SILAKAN ISI PENDAFTARAN</h4>
                <div class="btn btn-primary">
                <h1 class="text-white" id="a1"></h1>
                  

              </div>
              </div>


            <label class="text-white bayangan font-weight-bold">Nama Pasien</label>
            <input name="nama_pasien" type="text" class="form-control">
                <textarea  class="form-control" name="no_antrian" rows="1" hidden></textarea>
                <input type="hidden" name="tgl" id="tgl" value="<?= date('Y-m-d'); ?>">
          </div>
           <div class="form-group">
            <label class="text-white font-weight-bold">Umur</label>
            <input type="text" name="umur" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-white font-weight-bold">Jenis Kelamin</label>
            <p class="text-white">
              <input type='radio' name='jenis_kelamin' value='pria'/>Pria    
            <input type='radio' name='jenis_kelamin' value='perempuan'/>Perempuan</p>
          <div class="form-group">
            <label class="text-white font-weight-bold">Telepon</label>
            <input type="text" name="telepon" class="form-control">
          </div>
          <div class="form-group">
            <label class="text-white font-weight-bold">Agama</label>
            <select type="text" name="agama" class="form-control">
                        <?php for ($i=1; $i <=1 ; $i++): ?>
              <option value=""> Hindu</option>
              <option value=""> Kristen</option>
              <option value=""> Katolik</option>
              <option value=""> Islam</option>
             
                        <?php endfor; ?>
            </select>
          </div>

        <div class="col">
                <button type="submit" class="btn btn-primary btn-block text-uppercase">
                  Ambil Nomor
                </button>
              <hr>
              <div class="text-white bayangan text-center">
                 <?= format_indo(date('Y-m-d')); ?>
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </div> 

       
</div>
    <div class="row">
            <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
               
                <h2 class="text-uppercase mb-4">Klinik Apotek Nirmala di Dirikan Pada Tahun 2003 </h2>
                <p class="mb-4">Di Dirikan Oleh Dr.J.Palimbong P.,SpB</p>
                <hr>
            </div>
            

                    
                    </div>
                </div>
<footer id="main-footer" class="text-center bg-warning py-2 mt-md-0">
            <div class="container">
                <div class="row ">
                    <div class="text-md-left col-md-4 mr-auto">
                        <h5><b> KLINIK NIRMALA </b></h5>
                        <img class style="height: 120px;" src="http://localhost/klinik/assets/bg.jpg">
                        <br><br>
                        <a class="font-weight-bold btn btn-dark mb-5" href="https://www.google.com/maps/place/Apotek+Nirmala/@-2.9659659,119.8987995,17z/data=!3m1!4b1!4m5!3m4!1s0x2d93e95c1d8a5ddb:0xe3436a7b037a56c2!8m2!3d-2.96597!4d119.9009858">Peta Lokasi</a><br>
                    </div>
                    <div class="text-md-left col-md-4 mt-4 mt-md-0">
                        <h5><b> CONTACT KLINIK NIRMALA</b></h5>
                        <div><i class="fas fa-envelope fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="G-mail"></i>Yospinbarrunglumele@gmail.com</div>
                        <div><i class="fas fa-phone fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="Phone"></i>082349486057</div>
                        <div><i class="fas fa-globe fa-fw mr-3" data-toggle="tooltip" data-placement="top" title="Website"></i><b>https://nirmala.com</b></div>
                        <div class="pt-3">
                            <a href="#" class="text-primary mr-2">
                                <i class="fab fa-facebook fa-lg" data-toggle="tooltip" data-placement="top" title="Facebook"></i>
                            </a>
                        <a href=" #" class="text-danger mr-2">
                                    <i class="fab fa-instagram fa-lg" data-toggle="tooltip" data-placement="top" title="Instagram"></i>
                        </a>
                        <a href=" #" class="text-white mr-2">
                                        <i class="fab fa-google-plus fa-lg" data-toggle="tooltip" data-placement="top"4title="Google"></i>
                        </a>
                    </div>
                </div>
              </div>
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