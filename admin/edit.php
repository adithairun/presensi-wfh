

 <html lang = "en">
 	<head>
 		<title>SISVERVAL</title>
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
 <body>
   <?php
    include '../akses/conn.php';
    $stud_no = $_GET['stud_no'];
    $query_mysql = mysqli_query($conn,"SELECT * FROM storage WHERE stud_no='$stud_no'")or die(mysql_error());

    while($data = mysqli_fetch_array($query_mysql)){
    ?>

       <form  onsubmit="return validation()" autocomplete="off" action="update_status.php" method="post">
       <div class="card-body table-responsive p-0">
      <table  class="table table-hover text-wrap">
              <tr>
       <td>Status Perbaikan Data</td>
       <td>

         <input type="hidden" name="stud_no" value="<?php echo $data['stud_no'] ?>">

		 <input type="text" readonly value="<?php echo $data['nama_siswa'] ?>">
		 <br>
         <input type="text" name="status" readonly value="<?php echo $data['status'] ?>">
		 

         <br>
         <div class="form-group">
          
           <br>
         <select name="status" class="form-control" >
             <option value="">PILIH STATUS PERBAIKAN DATA</option>
             <option value="Belum Dikonfirmasi">Belum Dikonfirmasi</option>
			 <option value="Sementara Proses">Sementara Proses</option>
			 <option value="Apa Datamu Yang Salah ?">Apa Datamu Yang Salah ?</option>
             <option value="Kalau tidak ada yang salah tidak perlu upload berkas yaa">Kalau tidak ada yang salah tidak perlu upload berkas yaa</option>
			 <option value="Tidak salah kau punya NISN, sudah sesuai dengan ijazah">Tidak salah kau punya NISN, sudah sesuai dengan ijazah</option>
			 <option value="Sudah benar kau punya nama ibu, kenapa bilang salah">Sudah benar kau punya nama ibu, kenapa bilang salah</option>
			 <option value="Nama ayah mengikuti yang di ijazah">Nama ayah mengikuti yang di ijazah</option>
			 <option value="Nama ayah mengikuti yang di ijazah, Nama Ibu Sementara Proses">Nama ayah mengikuti yang di ijazah, Nama Ibu Sementara Proses</option>			 
			 <option value="Nama sudah benar kenapa bilang salah">Nama sudah benar kenapa bilang salah</option>	
			 <option value="Nama mengikuti yang di ijazah">Nama mengikuti yang di ijazah</option>	
			 <option value="Sistem dipusat sedang perbaikan sehingga kami belum bisa melakukan perbaikan data, harap bersabar">Sistem dipusat sedang perbaikan sehingga kami belum bisa melakukan perbaikan data, harap bersabar</option>
             <option value="Dalam Tahap Pengajuan">Dalam Tahap Pengajuan</option>
             <option value="Nama Ayah belum bisa diubah karena sistem dipusat dalam perbaikan">Nama Ayah belum bisa diubah karena sistem dipusat dalam perbaikan</option>
             <option value="Upload kembali Kartu keluarga, di foto bagus-bagus">Upload kembali Kartu keluarga, di foto bagus-bagus</option>
             <option value="Upload kembali Ijazah, di foto bagus-bagus">Upload kembali Ijazah, di foto bagus-bagus</option>
             <option value="Upload kembali Ijazah dan kartu keluarga, di foto bagus-bagus">Upload kembali Ijazah dan kartu keluarga, di foto bagus-bagus</option>
             <option value="Berhasil Diperbarui">Berhasil Diperbarui</option>
           </select>
    <!--       <input type="text" id="status" name="status" placeholder="<?php echo $data['status'] ?>"> -->
         </div>


       </td>
     </tr>

     <tr>
       <td></td>
       <td><input class="btn-primary btn-align " type="submit" value="Simpan"></td>
     </tr>

             </table>
       </div>
       </form>

 <?php } ?>
</body>

</html>
