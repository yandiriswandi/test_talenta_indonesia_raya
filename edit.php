<?php 
  
  include('config/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM users WHERE id = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Data</title>
  </head>

  <body>
  <?php include('navbar/navbar.php'); ?>
    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-header">
            <b>EDIT DATA</b>
            </div>
            <div class="card-body">
              <form action="edit-data.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama" class="form-control">
                  <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                </div>

                <!-- <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <input type="text" name="jenis_kelamin" value="<?php echo $row['jenis_kelamin'] ?>" placeholder="Laki-laki / Perempuan" class="form-control">
                </div> -->

                <div class="form-group">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                <?php
                include "koneksi.php";
                //query menampilkan nama unit kerja ke dalam combobox
                $query    = mysqli_query($connection, "SELECT * FROM users GROUP BY jenis_kelamin ORDER BY jenis_kelamin");
                while ($data = mysqli_fetch_array($query)) {
                ?>
                <option value="<?=$data['jenis_kelamin'];?>"><?php echo $data['jenis_kelamin'];?></option>
                <?php
                }
                ?>
                </select>
                </div>

                <div class="form-group">
                  <label>Usia</label>
                  <textarea class="form-control" name="usia" placeholder="Masukkan Usia" rows="4"><?php echo $row['usia'] ?></textarea>
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

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