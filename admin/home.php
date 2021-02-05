<?php 
	require 'login_query.php';
	require_once '../akses/conn.php'
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PRESENSI-WFH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  
  
  <script src="plugins/chart.js/Chart.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="home.php" class="nav-link">Home</a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
     
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">

      <span class="brand-text font-weight-light"><center>PRESENSI-WFH</center></span>
    </a>
	<?php 
				$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id` = '$_SESSION[user]'") or die(mysqli_error());
				$fetch = mysqli_fetch_array($query);
			?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
		<br>
        <div class="text-white bg-dark">   &nbsp;
         	 <?php 
							echo $fetch['firstname']." ".$fetch['lastname'];
						?>
        </div>
	
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
               
              </p>
            </a>
       
          </li>
          
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manajemen Akun</p>
                </a>
              </li>
             
            </ul>
          </li>

          
          <li class="nav-item has-treeview ">
            <a href="pengguna.php" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Presensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="pengguna.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="edit-data.php" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="data_presensi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi Pengguna</p>
                </a>
              </li>
				
            </ul>
          </li>
         
          
     
          <li class="navbar">
      <a href="logout.php" class="fas fa-arrow-alt-circle-left">

        Keluar
      </a>
    </li>
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                		  <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from student");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Jumlah Seluruh Pengguna</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
		    <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from storage");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Total Presensi</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			
			
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from student where status='YA'");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Pengguna yang WFH</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			
          </div>
		  <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from storage where absen='Datang'");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Total Presensi Datang</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			
          </div>
		     <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <?php
include '../akses/conn.php';

$sql      = mysqli_query($conn, "select * from storage where absen='Pulang'");
$query    =($sql);
$count    =mysqli_num_rows($query);
echo "<h3>$count</h3>";
?>

                <p>Total Presensi Pulang</p>
              </div>
              <div class="icon">
                <i class="ion ion-person"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
			
			
          </div>
		  
		  <div class="col-lg-3 col-6">
            <!-- small box -->
          
			
			
          </div>
		   
          <!-- ./col -->
          
          <!-- ./col -->
        </div>
        <!-- /.row -->
       <!-- Edit DISINI -->
	  
		  <span class="btn-secondary btn-lg">
      <a href="backup.php" class="fas fa-sync-alt">
<font color="white">
        Backup Database
      </a>
	  </font>
    </span>
	<!--	<center><h2 class="m-0 text-dark">Grafik Verval Siswa</h2></center> -->
	
		<div style="width: 100%;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
	
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Siswa Ajukan Verval", "Belum Dikonfirmasi", "Sementara Proses", "Berhasil Diperbarui"],
				datasets: [{
					label: '',
					data: [
					
					<?php 
					
					$grafik_verval = mysqli_query($conn,"select * from storage ");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php 
					
					$grafik_verval = mysqli_query($conn,"select * from storage where absen='D'");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php 
					
					$grafik_verval = mysqli_query($conn,"select * from storage where status='Sementara Proses'");
					echo mysqli_num_rows($grafik_verval);
					?>,
					<?php 
					
					$grafik_verval = mysqli_query($conn,"select * from storage where status='Berhasil Diperbarui'");
					echo mysqli_num_rows($grafik_verval);
					?>,
					
				
					],
					backgroundColor: [
					'rgba(0, 140, 255, 1)',
					'rgba(240, 52, 52, 1)',
					'rgba(245, 229, 27, 1)',
					'rgba(0, 192, 67, 1)'
					
					
					],
					borderColor: [
					'rgba(0, 140, 255, 1)',
					'rgba(240, 52, 52, 1)',
					'rgba(245, 229, 27, 1)',
					'rgba(0, 192, 67, 1)'
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
	
			  
			  <!-- Edit DISINI -->
              
          
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <Script Language='Javascript'>
<!--
document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%76%61%72%20%74%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%76%61%72%20%6E%3D%74%2E%74%61%72%67%65%74%7C%7C%74%2E%73%72%63%45%6C%65%6D%65%6E%74%3B%69%66%28%6E%2E%6E%6F%64%65%4E%61%6D%65%21%3D%22%41%22%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%20%3C%2F%73%63%72%69%70%74%3E%3C%66%6F%6F%74%65%72%20%63%6C%61%73%73%3D%22%6D%61%69%6E%2D%66%6F%6F%74%65%72%22%3E%20%3C%73%74%72%6F%6E%67%3E%43%6F%70%79%72%69%67%68%74%20%26%63%6F%70%79%3B%20%32%30%32%31%20%50%52%45%53%45%4E%53%49%2D%57%46%48%3C%2F%73%74%72%6F%6E%67%3E%20%3C%42%52%3E%20%3C%73%74%72%6F%6E%67%3E%4D%6F%64%69%66%69%65%64%20%42%79%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%69%6E%73%74%61%67%72%61%6D%2E%63%6F%6D%2F%61%64%69%74%68%61%69%72%75%6E%22%3E%20%41%64%69%74%79%61%20%48%61%69%72%75%6E%3C%2F%61%3E%3C%2F%73%74%72%6F%6E%67%3E%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%66%6C%6F%61%74%2D%72%69%67%68%74%20%64%2D%6E%6F%6E%65%20%64%2D%73%6D%2D%69%6E%6C%69%6E%65%2D%62%6C%6F%63%6B%22%3E'));
//-->
</script>
      <b>V.</b> <?php echo $versi?>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
