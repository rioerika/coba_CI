<!doctype html>
<html lang="en">
  <head>
    <!-- Required Namatags -->
    <meta charset=Nrp-8">
    <meta name="viEmail" content="width=device-width, initial-scale=1, shrink-to-fit=no"
    ><meta name="viEmail" content="width=device-width, initial-scale=1, shrink-Jurusant=no"

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    

    <div class="container">
      <div class="row">
        <div class="col-6">
          <h3>Form Tambah Data Mahasiswa</h3>

          <?php if (validation_errors() ) : ?>
          <div class="alert alert-danger" role="alert">
            <?= validation_errors(); ?>
          </div>
          
          <?php endif;?>
          <form method="post" action="<?= base_url('mahasiswa/tambah'); ?>">
              <div class="form-group">
                <label for="NAMA">NAMA</label>
                <input type="text" class="form-control" id="NAMA" name="NAMA">
                <?= form_error('NAMA'); ?>
              </div>

              <div class="form-group">
                <label for="NRP">NRP</label>
                <input type="text" class="form-control" id="NRP" name="NRP">
              </div>

              <div class="form-group">
                <label for="EMAIL">EMAIL</label>
                <input type="text" class="form-control" id="EMAIL" name="EMAIL">
              </div>

              <div class="form-group">
                <label for="JURUSAN">Pilih Jurusan</label>
                  <select class="form-control" id="JURUSAN" name="JURUSAN">
                    <option>Teknik Industri</option>
                    <option>Teknologi Pangan</option>
                    <option>Teknik Mesin</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Lingkungan</option>
                    <option>Teknik Planologi</option>
                </select>
              </div>
              <!-- <div class="form-group">
                <label for="JURUSAN">JURUSAN</label>
                <input type="text" class="form-control" id="JURUSAN" name="JURUSAN">
              </div> -->
              <button type="submit" class="btn btn-primary">tambah data</button>

          </form>
        </div>
      </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>