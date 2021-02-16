<!DOCTYPE html>
<style>
/* BANNER PROMO MODAL */
.modal-content{
margin-top :800px;
}
        		.modal-promo-popup {
        			display: block;
        			position: fixed;
        			z-index: 1;
        			padding-top: 100px;
        			left: 0;
        			top: 0;
        			width: 100%;
        			height: 100%;
        			overflow: auto;
        			background-color: rgb(0,0,0);
        			background-color: rgba(0,0,0,0.6);
        		}
        		.modal-content {
        			margin: auto;
        			display: block;
        			width: 80%;
        			max-width: 700px;
        			border-radius: 0 !important;
        		}
        		.caption {
        			margin: auto;
        			display: block;
        			width: 80%;
        			max-width: 700px;
        			text-align: center;
        			color: #ccc;
        			padding: 10px 0;
        			height: 150px;
        		}
        		.modal-content, .caption {
        			-webkit-animation-name: zoom;
        			-webkit-animation-duration: 0.6s;
        			animation-name: zoom;
        			animation-duration: 0.6s;
        		}
        		@-webkit-keyframes zoom {
        			from {-webkit-transform:scale(0)}
        			to {-webkit-transform:scale(1)}
        		}
        		@keyframes zoom {
        			from {transform:scale(0)}
        			to {transform:scale(1)}
        		}
        		@media only screen and (max-width: 700px){
        			.modal-content {
        				width: 90%;
        			}
        		}
        		/* END BANNER PROMO MODAL */

	</style>
<?php
	session_start();
	if(!ISSET($_SESSION['student'])){
		header("location: ..");
	}
	require_once 'akses/conn.php'
?>
<html lang="en">
	<head>
		<title>PRESENSI-WFH</title>
		<meta charset = "utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="akses/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="akses/css/jquery.dataTables.css" />
		<link rel="stylesheet" type="text/css" href="akses/css/style.css" />
	</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
		<div class="container-fluid">
			<label class="navbar-brand">PRESENSI-WFH</label>

		</div>
		
	</nav>
	
	<!-- <button class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true"><span class="glyphicon glyphicon-fire"></span> Petunjuk dan Bantuan</button>
	-->
	<div class="col-md-4">
		<div class="panel panel-primary" style="margin-top:20%;">
			<div class="panel-heading">
				<h1 class="panel-title">Data</h1>
			</div>
			<?php
							$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `stud_id` = '$_SESSION[student]'") or die(mysqli_error());
							$fetch = mysqli_fetch_array($query);
							//$nama = $fetch['absen'];
							
							
						?>
			<div class="panel-body">
				<!-- <h4>NISN : <label class="pull-right"><?php echo $fetch['stud_no']?></label></h4>
				<hr style="border-top:1px dotted #ccc;"/> -->
			<h4>Nama : <label class="pull-right"><?php echo $fetch['nama']?></label></h4>
			<hr style="border-top:1px dotted #ccc;"/>
			<h4>Username : <label class="pull-right"><?php echo $fetch['username']?></label></h4>
			<hr style="border-top:1px dotted #ccc;"/>
		<h4>Jadwal Pekan : <label class="pull-right"><?php echo $fetch['jadwal']?></label></h4>
				<hr style="border-top:1px dotted #ccc;"/>

			


<br>
<!--<button class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true"><span class="glyphicon glyphicon-fire"></span> Petunjuk dan Bantuan</button>
-->
<b><h3>Pilih Foto Selfie :</h3></b>
				
				<form autocomplete="off" method="POST" enctype="multipart/form-data" action="save_file.php">
					<input type="file" name="file" size="4" style="background-color:#fff;" required="required" />
					<br />

					
					
					<input type="hidden" name="stud_no" value="<?php echo $fetch['stud_no']?>"/>
					<input type="hidden" name="nama" value="<?php echo $fetch['nama']?>"/>
					<div class="form-group">
					<b><h3>Pilih Presensi :</h3></b>
					
								<select name="absen" class="form-control" required >

									<option value="">==PILIH PRESENSI==</option>

									
									<option value="Datang">Datang</option>
									<option value="Pulang">Pulang</option>
									
								</select>
					
				</div>
					<button class="btn btn-success btn-sm" name="save"><span class="glyphicon glyphicon-plus"></span> Simpan Presensi</button>
				</form>
				<br style="clear:both;"/>
<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#modal_confirm"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
<!-- <button class="btn btn-warning btn-sm" role="button" data-toggle="modal" data-target="#exampleModal" aria-pressed="true"><span class="glyphicon glyphicon-fire"></span> Petunjuk dan Bantuan</button> -->
		<!--		<div class="dropdown pull-right">
					<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><span class="glyphicon glyphicon-cog">&nbsp;</span><span class="caret"></span></button>
<a class="btn btn-warning btn-bg" href="#" data-toggle="modal" data-target="#modal_confirm">Logout</a>
					<ul class="dropdown-menu">
						<li><a href="student_update.php">Update Account</a></li>
						<li><a href="#" data-toggle="modal" data-target="#modal_confirm">Logout</a></li>
					</ul>
				</div> -->
			</div>
		</div>

	</div>
	
	<!-- POP UP UCAPAN TANPA FOTO HANYA TEXT -->

	<!-- UNTUK v1.6 -->


	<body>
		<div id="myModal" class="modal-promo-popup">
		      <div class="modal-content">

	       <div class="modal-body">
	         <h4> <center><b>PERHATIAN!</b></center></h4>
			 <h4>

				 Lakukan presensi sesuai dengan waktu seperti di siransija,<br> jika susah untuk presensi pulang silahkan pasang alarm untuk mengingatkan. Terima Kasih
				 </h4>
			  <h5> <center><b>-TIM IT SMA NEGERI 1 GORONTALO-</b></center></h5>
	        </div>

	      </div>
		<div class="caption"><span id="close" class="" style="color:yellow !important;font-size:20px;"><span class="glyphicon glyphicon-log-out"></span> Tutup</div>
	</div>

	</body>



	<script type="text/javascript">
	        // BANNER PROMO MODAL
	        var modal = document.getElementById("myModal");
	    	var tutup = document.getElementById("close");

	    	if (document.cookie.indexOf("visited=") >= 0) {
	    		modal.style.display = "none";
	    	} else {
	    		expiry = new Date();
	    // 		expiry.setTime(expiry.getTime()+(1440*60*1000)); // 1440 minutes atau 1 day
	            expiry.setTime(expiry.getTime()+(1*3*1000)); // 1*30*1000 ini 30 detik

	    		document.cookie = "visited=yes; expires=" + expiry.toGMTString();
	    	}

	    	tutup.onclick = function() {
	    	  	modal.style.display = "none";
	    	}
	        // END BANNER PROMO MODAL
	    </script>



	<!-- END POP UP UCAPAN TANPA FOTO HANYA TEXT -->

	<div class="col-md-8">
		<div class="alert alert-info" style="margin-top:100px;">DAFTAR PRESENSI WFH</div>
		<div class="panel panel-default">
			<div class="panel-body alert-success" >

				<table id="table" class="table table-bordered">
					<thead>
						<tr>
						<!--	<th>Nama File</th>
						<th>Tipe File</th> -->
							
							<th>Tanggal Presensi</th>
							<th>Jam Presensi</th>
							<th>Presensi</th>
				<!--			<th>Kontak</th> -->
					<!--		<th>Aksi</th> -->
						</tr>
					</thead>
					<tbody>
						<?php
							$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `stud_id` = '$_SESSION[student]'") or die(mysqli_error());
							$fetch = mysqli_fetch_array($query);
							//$nama = $fetch['absen'];
							
							$stud_no = $fetch['stud_no'];
							$query1 = mysqli_query($conn, "SELECT * FROM `storage` WHERE `stud_no` = '$stud_no' ORDER BY date_uploaded, jam DESC") or die(mysqli_error());
							while($fetch1 = mysqli_fetch_array($query1)){
						?>
						<tr class="del_file<?php echo $fetch1['store_id']?>">
					<!--	<td><?php echo substr($fetch1['filename'], 0 ,30)."..."?></td>
						<td><?php echo $fetch1['file_type']?></td> -->
							<td><?php echo $fetch1['date_uploaded']?></td>
						<td><?php echo $fetch1['jam']?></td>
						<td><?php echo $fetch1['absen']?></td>
					<!--		<td><a href="download.php?store_id=<?php echo $fetch1['store_id']?>" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-download"></span> Download</a>
							| <button class="btn btn-danger btn-sm btn_remove" type="button" id="<?php echo $fetch1['store_id']?>"><span class="glyphicon glyphicon-trash"></span> Hapus</button>
							</td> -->
						</tr>
						<?php
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
 <footer class="main-footer">
  <strong>Copyright &copy; 2021 PRESENSI-WFH <b>V.</b> <?php echo $versi?></strong> <BR>
   <Script Language='Javascript'>
<!--
document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%76%61%72%20%74%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%76%61%72%20%6E%3D%74%2E%74%61%72%67%65%74%7C%7C%74%2E%73%72%63%45%6C%65%6D%65%6E%74%3B%69%66%28%6E%2E%6E%6F%64%65%4E%61%6D%65%21%3D%22%41%22%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%74%72%6F%6E%67%3E%4D%6F%64%69%66%69%65%64%20%42%79%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%69%6E%73%74%61%67%72%61%6D%2E%63%6F%6D%2F%61%64%69%74%68%61%69%72%75%6E%22%3E%20%41%64%69%74%79%61%20%48%61%69%72%75%6E%3C%2F%61%3E%3C%2F%73%74%72%6F%6E%67%3E%20%3C%2F%66%6F%6F%74%65%72%3E'));
//-->
</script>
	<div class="modal fade" id="modal_confirm" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h3 class="modal-title">System</h3>
				</div>
				<div class="modal-body">
					<center><h4 class="text-danger">Lanjutkan Keluar ?</h4></center>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-success" data-dismiss="modal">Batal</a>
					<a href="logout.php" class="btn btn-danger" >Ya</a>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Petunjuk dan Kontak Bantuan</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Silahkan periksa data anda, pastikan seluruh data yang tertulis sudah sesuai dengan biodata kalian. jika ada data yang tidak sesuai :<br>
				1. Upload berkas berupa Ijazah SMP dan Kartu Keluarga <b>(Diupload masing-masing sehingga file yang diupload berjumlah 2)</b><br>
				2. Mengisi kolom "Data yang salah" dengan keterangan data apa yang salah di biodata kalian.  <br>
				3. Mengisi kolom "Kontak Siswa Untuk dihubungi (WA)" dengan keterangan nomor WA kalian untuk dilakukan konfirmasi jika ada yang tidak sesuai  <br>
				4. Cek Status perbaikan data kalian dibagian "Status Perbaikan" <br>
				jika mengalami kendala silahkan menghubungi kontak dibawah ini<br>

		<br><a href="https://wa.me/6285242341953" class="btn-primary btn-sm"> Aditya</a><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>

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
					<center><h4 class="text-danger">Anda yakin akan menghapus file ini ?</h4></center>
				</div>
				<div class="modal-footer">
					<a type="button" class="btn btn-success" data-dismiss="modal">No</a>
					<button type="button" class="btn btn-danger" id="btn_yes">Yes</button>
				</div>
			</div>
		</div>
	</div>
<?php include 'script.php'?>
<script type="text/javascript">
$(document).ready(function(){
	$('.btn_remove').on('click', function(){
		var store_id = $(this).attr('id');
		$("#modal_remove").modal('show');
		$('#btn_yes').attr('name', store_id);
	});

	$('#btn_yes').on('click', function(){
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
</body>
</html>
