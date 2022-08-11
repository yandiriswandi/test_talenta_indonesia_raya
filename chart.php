
<html>
    <head>
        <title>ChartJS</title>
        <script type="text/javascript" src="chartjs/Chart.js"></script>
        <script src="Chart.bundle.js"></script>
        <link rel="stylesheet" href="assets/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    </head>
<body>
	<?php 
	include 'config/koneksi.php';
    include 'navbar/navbar.php';
	?>
    <div class="container" style="margin-top: 40px">
      <div class="row">
        <div class="col-md-12">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded ">
            <div class="card-header">
              <b>CHART</b>
            </div>
            <div class="h6 mt-4 mb-3 text-center">Grafik Jenis Kelamin<div>
                <div style="width: 800px;margin: 0px auto;">
                    <canvas id="myChart"></canvas>
                </div>
                    <br/>
                    <br/>
            </div>
            <div class="h6 mt-4 mb-3 text-center">Grafik Rentang Usia<div>
                <div style="width: 800px;margin: 0px auto;">
                    <canvas id="myChartUsia"></canvas>
                </div>
                    <br/>
                    <br/>
            </div>
          </div>
      </div>
    </div>
 
    <script>
        var ctx = document.getElementById("myChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Laki-laki","Perempuan"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_laki2 = mysqli_query($connection,"select * from users where jenis_kelamin='Laki-laki'");
                    echo mysqli_num_rows($jumlah_laki2);
                    ?>, 
                    <?php 
                    $jumlah_perempuan = mysqli_query($connection,"select * from users where jenis_kelamin='Perempuan'");
                    echo mysqli_num_rows($jumlah_perempuan);
                    ?>
                    
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
        var ctx = document.getElementById("myChartUsia").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ["Dibawah 19 tahun","Diatas 20 tahun"],
                datasets: [{
                    label: '',
                    data: [
                    <?php 
                    $jumlah_usia19 = mysqli_query($connection,"select * from users where usia < 19");
                    echo mysqli_num_rows($jumlah_usia19);
                    ?>, 
                    <?php 
                    $jumlah_usia20 = mysqli_query($connection,"select * from users where usia > 20");
                    echo mysqli_num_rows(  $jumlah_usia20);
                    ?>
                    
                    ],
                    backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                    ],
                    borderColor: [
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>