<!DOCTYPE html>
<?php


	require_once '../akses/koneksi.php';
require_once 'fungsi.php';
$nip_err = $up_type_err ="";
if($_SERVER['REQUEST_METHOD']=='POST'){
	
	
	if(empty($_POST['stud_no'])){
		$nip_err = "Harap pilih salah satu data yang akan diupdate";
	}else{
		$stud_no = $_POST['stud_no'];
		$stud_no = implode(",", $stud_no);
	}
	if(empty($_POST['update_type'])){
		$up_type_err = "Pilih parameter update";
	}else{
		$update_type = $_POST['update_type'];
	}
	if(empty($nip_err) && empty($up_type_err)){
		if(update($update_type, $stud_no)):
			echo '<div class="alert alert-success">Berhasil Diupdate</div>';
		else:
			echo '<div class="alert alert-danger">data gagal disimpan</div>';
		endif;
	}
}
?>
<?php
require '../akses/validator.php';
require_once '../akses/conn.php'
	
?>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Home</a>
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
          <li class="nav-item has-treeview">
            <a href="home" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
               
              </p>
            </a>
       
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Admin
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manajemen Akun</p>
                </a>
              </li>
             
            </ul>
          </li>

          
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Presensi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
             
              <li class="nav-item">
                <a href="#" class="nav-link  active ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="edit-data" class="nav-link  ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>
			   <li class="nav-item">
                <a href="data-presensi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Presensi Pengguna</p>
                </a>
              </li>
				
            </ul>
          </li>
         
          
         
          <li class="navbar">
      <a href="logout" class="fas fa-arrow-alt-circle-left">

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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pengguna</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
          
<!-- DATA TABLE UNTUK TES -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Pengguna</h3>
			  <form method="post" enctype="multipart/form-data" action="upload_aksi">
<br>
	Pilih File: <br>

	<input name="filepegawai" type="file" required="required"> <br><br>

<b>Petunjuk</b><br>

<a style="color:black">*Download Template file excel <a href="file/filedownload.xls">Download</a><br>



	<button class="btn btn-primary" name="upload" type="submit"><span class="ion-upload"></span> Upload File</button>

</form>

<br>
<button class="btn btn-success" data-toggle="modal" data-target="#form_modal"><span class="fas fa-plus-circle"></span> Tambah Pengguna</button>

            </div>
			
            <!-- /.card-header -->
			
            <div class="container">
			<a  href="download-pengguna.php"  ><button class="btn btn-success"><span class="ion-archive"></span> Download Pengguna</button></a>
			
			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<div class="form-group">
					<label>Pilih jenis update :</label>
					<select class="form-control" name="update_type">
						<option>===PILIH STATUS===</option>
						<option>YA</option>
						<option>TIDAK</option>
						<option>TIDAK TERMASUK</option>
					</select>
					
				</div>
			<div class="form-group">
				<button type="submit" class="btn btn-md btn-primary"> <span class="ion-upload"></span>  Update</button>
				
			</div>
			
			 <table id="example1" class="table table-bordered table-striped">
				
				<thead>
					<th><input type="checkbox" onchange="checkAll(this)" ></th>
					<th>NAMA</th>
					<th>USERNAME</th>
					<th>JADWAL</th>
					
					<th>AKTIF</th>
					
				</thead>
				<tbody>
					<?php

						
						$no = 1;
						$data =showData();
						while($row=$data->fetch_array()){
							echo '
								<tr>
								<td>

										<input type="checkbox" name="stud_no[]" value="'.$row['stud_no'].'">
									</td>
									
									<td>'.$row['nama'].'</td>
									<td>'.$row['username'].'</td>
									
								
									<td>'.$row['jadwal'].'</td>
									<td>'.$row['status'].'</td>
									
									
								</tr>


							';
							$no++;
						}
						$data->free_result();

					?>
				</tbody>
			</table>
				
				
			</form>
		</div>

<script type="text/javascript">
 function checkAll(ele) {
      var checkboxes = document.getElementsByTagName('input');
      if (ele.checked) {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox' ) {
                  checkboxes[i].checked = true;
              }
          }
      } else {
          for (var i = 0; i < checkboxes.length; i++) {
              if (checkboxes[i].type == 'checkbox') {
                  checkboxes[i].checked = false;
              }
          }
      }
  }
</script>




	<div class="modal fade" id="modal_confirm" aria-hidden="true">

		<div class="modal-dialog modal-dialog-centered">

			<div class="modal-content">

				<div class="modal-header">

					<h3 class="modal-title">Hapus Data Siswa</h3>

				</div>

				<div class="modal-body">

					<center><h4 class="text-danger">Hanya bisa menghapus siswa yang telah mengupload, File yang siswa upload akan terhapus.</h4></center>

					<center><h3 class="text-danger">Lanjutkan ?</h3></center>

				</div>

				<div class="modal-footer">

					<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>

					<button type="button" class="btn btn-success" id="btn_yes">Ya</button>

				</div>

			</div>

		</div>

	</div>


	<footer>
  
  <!-- /.content-wrapper -->
 
  PRESENSI-WFH   <b>V.</b> <?php echo $versi?>
    </div>
  </footer>








	<!-- UPDATE STATUS -->



	<!-- Modal -->

	<div class="modal fade" id="exampleModal<?php echo $fetch['stud_id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

		<div class="modal-dialog" role="document">

			<div class="modal-content">

				<div class="modal-header">

					<h5 class="modal-title" id="exampleModalLabel">Kontak Bantuan</h5>

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">

						<span aria-hidden="true">&times;</span>

					</button>

				</div>

				<div class="modal-body">

					<div class="col-md-3"></div>

					<div class="col-md-6">

						<div class="form-group">

							<label>NISN</label>

							<input type="hidden" name="stud_id" value="<?php echo $fetch1['stud_id']?>" class="form-control"/>

							<input type="number" name="status" value="<?php echo $fetch1['status']?>" class="form-control" readonly="readonly"/>

						</div>

						<!--

						<div class="form-group">

							<label>Firstname</label>

							<input type="text" name="firstname" value="<?php echo $fetch['firstname']?>" class="form-control" required="required"/>

						</div>

						<div class="form-group">

							<label>Lastname</label>

							<input type="text" name="lastname" value="<?php echo $fetch['lastname']?>" class="form-control" required="required"/>

						</div>

						<div class="form-group">

							<label>Jenis Kelamin</label>

							<select name="gender" class="form-control" required="required">

								<option value=""></option>

								<option value="L">Laki-laki</option>

								<option value="P">Perempuan</option>

							</select>

						</div>

						<div class="form-inline">

							<label>Year</label>

							<select name="year" class="form-control" required="required">

								<option value=""></option>

								<option value="1">1</option>

								<option value="2">2</option>

								<option value="3">3</option>

								<option value="4">4</option>

							</select>

							<label>Section</label>

							<select name="section" class="form-control" required="required">

								<option value=""></option>

								<option value="A">A</option>

								<option value="B">B</option>

								<option value="C">C</option>

								<option value="D">D</option>

							</select>

						</div>

						<br /> -->

						<h1><?php echo $fetch1['file_type']?></h1>

						<div class="form-group">

							<label>Password</label>

							<input type="text" name="password" class="form-control" value="<?php echo $fetch['tgl_lahir']?>" required="required"/>

						</div>

					</div>

				</div>

				<div style="clear:both;"></div>

				<div class="modal-footer">

					<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>

					<button name="update" class="btn btn-warning" ><span class="glyphicon glyphicon-save"></span> Update</button>

				<div class="modal-footer">

					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>



				</div>

			</div>

		</div>

	</div>



	<!-- AKHIR UPDATE STATUS -->


         
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  
  
  
  <div class="modal fade" id="form_modal" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="save_pengguna.php">	
					<div class="modal-header">
						<h4 class="modal-title">Tambah Pengguna</h4>
					</div>
					<div class="modal-body">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nomor</label>
								<input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" type="number" maxlength="5" placeholder="Harus Unik" name="stud_no" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Nama</label>
								<input type="text" name="nama" class="form-control" required="required"/>
							</div>
							
							<div class="form-group">
								<label>Jadwal</label>
								<select name="jadwal" class="form-control" required="required">
									<option value="">Pilih Jadwal</option>
									<option value="GANJIL">GANJIL</option>
									<option value="GENAP">GENAP</option>
									<option value="TIDAK TERJADWAL">TIDAK TERJADWAL</option>
								</select>
							</div>
							<div class="form-group">
								<label>Username</label>
								<input type="text" name="username" class="form-control" required="required"/>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="text" name="password" class="form-control" required="required"/>
							</div>
							
							<div class="form-group">
								<label>Status</label>
								<select name="status" class="form-control" required="required">
									<option value="">Pilih Status Aktif</option>
									<option value="YA">YA</option>
									<option value="TIDAK">TIDAK</option>
									<option value="TIDAK TERMASUK">TIDAK TERMASUK</option>
								</select>
							</div>
							
						</div>
					</div>
					<div style="clear:both;"></div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
						<button name="save" class="btn btn-primary" ><span class="fas fa-plus-circle"></span> Simpan</button>
					</div>
				</form>
			</div>
		</div>
  
  
  <!-- MODAL DLL -->
  
  <?php include '../akses/script.php'?>
  <div class="modal fade" id="modal_confirm" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered">

		<div class="modal-content">

			<div class="modal-header">

				<h3 class="modal-title">System</h3>

			</div>

			<div class="modal-body">

				<center><h4 class="text-danger">Are you sure you want to logout?</h4></center>

			</div>

			<div class="modal-footer">

				<a type="button" class="btn btn-success" data-dismiss="modal">Cancel</a>

				<a href="logout.php" class="btn btn-danger">Logout</a>

			</div>

		</div>

	</div>

</div>

<div class="modal fade" id="modal_remove" aria-hidden="true">

	<div class="modal-dialog modal-dialog-centered">

		<div class="modal-content">

			<div class="modal-header">

				<h3 class="modal-title">System</h3>

			</div>

			<div class="modal-body">

				<center><h4 class="text-danger">Are you sure you want to remove this file?</h4></center>

			</div>

			<div class="modal-footer">

				<a type="button" class="btn btn-success" data-dismiss="modal">No</a>

				<button type="button" class="btn btn-danger" id="btn_yess">Yes</button>

			</div>

		</div>

	</div>

</div>

<script type="text/javascript">

$(document).ready(function(){

	$('.btn_remove').on('click', function(){

		var store_id = $(this).attr('id');

		$("#modal_remove").modal('show');

		$('#btn_yess').attr('name', store_id);

	});



	$('#btn_yess').on('click', function(){

		var id = $(this).attr('name');

		$.ajax({

			type: "POST",

			url: "remove_file.php",

			data:{

				store_id: id

			},

			success: function(data){

				$("#modal_remove").modal('hide');

				$(".del_file" + id).empty();

				$(".del_file" + id).html("<td colspan='4'><center class='text-danger'>Deleting...</center></td>");

				setTimeout(function(){

					$(".del_file" + id).fadeOut('slow');

				}, 1000);



			}

		});

	});

});

</script>


















<script type="text/javascript">

$(document).ready(function(){

	$('.btn-delete').on('click', function(){

		var stud_id = $(this).attr('id');

		$("#modal_confirm").modal('show');

		$('#btn_yes').attr('name', stud_id);

	});

	$('#btn_yes').on('click', function(){

		var id = $(this).attr('name');

		$.ajax({

			type: "POST",

			url: "delete_pengguna.php",

			data:{

				stud_id: id

			},

			success: function(){

				$("#modal_confirm").modal('hide');

				$(".del_student" + id).empty();

				$(".del_student" + id).html("<td colspan='6'><center class='text-danger'>Deleting...</center></td>");

				setTimeout(function(){

					$(".del_student" + id).fadeOut('slow');

				}, 1000);

			}

		});

	});

});

</script>

  
  
  
  
  
  
  
  <!-- AKHIR MODAL DLL-->
  
  
  
  
  
  
  
  
  
  <footer>
  
  <!-- /.content-wrapper -->
 
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>

<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
