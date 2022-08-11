<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="assets/main.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>Data </title>
  </head>

  <body>
 <?php include('navbar/navbar.php'); ?>
    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-header">
              <b>DATA TEMAN</b>
            </div>
            <div class="card-body ">
              <a href="add.php" class="btn btn-md btn-success head " style="margin-bottom: 10px">
                <i class="bi bi-plus me-4"></i>
                  TAMBAH DATA
              </a>
              <a href="pdf.php" class="btn btn-md btn-warning head float-right " style="margin-bottom: 10px">
                <i class="bi bi-download"></i>
                  
              </a>
              <table class="table table-borderless table-hover" >
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">Usia</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('config/koneksi.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM users");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td><?php echo $row['usia'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">
                          <i class="bi bi-pencil"></i>
                          EDIT
                        </a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">
                          <i class="bi bi-trash"></i>
                          HAPUS
                        </a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>