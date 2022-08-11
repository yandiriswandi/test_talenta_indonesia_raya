<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Tambah Siswa</title>
  </head>

  <body>
  <?php include('navbar/navbar.php'); ?>
    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-header">
            <b>TAMBAH DATA</b>
            </div>
            <div class="card-body">
              <form action="simpan-data.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
                </div>

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                  <option >Pilih Jenis Kelamin</option>
                  <option value="Laki-laki">Laki-laki</option>
                  <option value="Perempuan">Perempuan</option>
                </select>
                </div>
                
                <div class="form-group">
                  <label>Usia</label>
                  <input type="text" name="usia" placeholder="Masukkan Usia" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">
                  <i class="bi bi-save"></i>
                  SIMPAN
                </button>
                <button type="reset" class="btn btn-warning">
                  <i class="bi bi-x-circle"></i>  
                  RESET
                </button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>