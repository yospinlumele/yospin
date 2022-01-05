<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>ADMIN</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
  <!-- https://fonts.google.com/specimen/Roboto -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontawesome.min.css" type="text/css">
  <!-- https://fontawesome.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap/css/bootstrap.min.css">
  <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/css/templatemo-style.css">
  

  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
</head>
<body>
<style>
  body {
  font-family: Roboto, Helvetica, Arial, sans-serif;
  background-color: #f8f9fa;
  overflow-x: hidden;
}
.form-control {
  background-color: #e9ecef;
  color: #fff;
  border: 0;
}
.form-control {
  padding: 19px 18px;
  border-radius: 0;
  height: 10px;
}
.form-group {
  margin-bottom: 15px;
}
  .jumbotron{
    background: url('<?= base_url("assets/bg1.jpg") ?>');

    
   }
  .bayangan{
    text-shadow: 3px 2px 1px #3c3c3c;
  }

</style>   
  </head> 

   
  </div> 
 <div class="container-fluid my-4">
  <div class="row justify-content-center">
      <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center bg-dark text-dark">Edit Jadwal Dokter</div>
        <div class="card-body">
          <form action="<?= base_url('editJadwal') ?>" method="POST">
            <input type="hidden" name="id" value="<?=$data_edit->id?>">
          <div class="form-group">
            <label>Nama Dokter </label>
            <input type="text"  name="nama_dokter" class="form-control" required value="<?=$data_edit->nama_dokter?>">
          </div>
           <div class="form-group">
            <label>Jenis_Kelamin</label>
            <input type="text"  name="jenis_kelamin" class="form-control"required value="<?=$data_edit->jenis_kelamin?>">
          </div>
           <div class="form-group">
            <label>Spesialis</label>
            <input type="text"  name="spesialis" class="form-control" required value="<?=$data_edit->spesialis?>">
          </div>
           <div class="form-group">
            <label>Hari Praktek</label>
            <input type="text"  name="hari_praktek" class="form-control" required value="<?=$data_edit->hari_praktek?>">
          </div>
            <div class="form-group">
            <label>Jam Praktek</label>
            <input type="text"  name="jam" class="form-control"required value="<?=$data_edit->jam?>">
          </div>
             <button class="btn btn-block btn-success">Edit Dokter</button>
        </form>
        </div>
      </div> 
        
      </div>
    </div>
  </div>
 

  <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>