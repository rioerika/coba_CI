<!doctype html>
<html lang="en">
  <head>
    <!-- Required Namatags -->
    <meta charset=Nrp-8">
    <meta name="viEmail" content="width=device-width, initial-scale=1, shrink-to-fit=no"
    ><meta name="viEmail" content="width=device-width, initial-scale=1, shrink-Jurusant=no"

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- My Css -->
    <link rel="stylesheet" href="<?=base_url(); ?>asset/css/style.css">

    <title>Data Mahasiswa</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">
          <h3>Daftar Mahasiswa</h3>
              
              <?php if ($this->session->flashdata('flash') ) : ?>
                <div class="row mt-3">
                  <div class="col-md-6">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                      Data Mahasiswa<strong> Berhasil</strong> <?= $this->session->flashdata('flash');  ?>.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

          <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-primary mb-3">tambah data</a>
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Nrp</th>
                  <th scope="col">Email</th>
                  <th scope="col">Jurusan</th>
                  <th scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1;?>
                <?php foreach ($mahasiswa as $mhs) : ?>
                  <tr>
                    <th scope="row"><?= $i++; ?></th>
                    <td><?= $mhs['NRP']; ?></td>
                    <td><?= $mhs['NAMA']; ?></td>
                    <td><?= $mhs['EMAIL']; ?></td>
                    <td><?= $mhs['JURUSAN']; ?></td>
                    <td>
                      <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['No']; ?>" class="badge badge-primary">Detail</a>
                      <a href="<?= base_url(); ?>mahasiswa/ubah/<?= $mhs['No']; ?>" class="badge badge-success">Ubah</a>
                      <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['No']; ?>" class="badge badge-danger" onclick="return confirm('yakin');">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              
              </tbody>
            </table>
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