<!-- import excel ke mysql -->
<!-- www.malasngoding.com -->

<?php
// menghubungkan dengan koneksi
include '../akses/conn.php';
// menghubungkan dengan library excel reader
include "excel_reader2.php";
?>

<?php
// upload file xls
$target = basename($_FILES['filesiswa2']['name']) ;
move_uploaded_file($_FILES['filesiswa2']['tmp_name'], $target);

// beri permisi agar file xls dapat di baca
chmod($_FILES['filepegawai2']['name'],0777);

// mengambil isi file xls
$data = new Spreadsheet_Excel_Reader($_FILES['filesiswa2']['name'],false);
// menghitung jumlah baris data yang ada
$jumlah_baris = $data->rowcount($sheet_index=0);

// jumlah default data yang berhasil di import
$berhasil = 0;
for ($i=2; $i<=$jumlah_baris; $i++){

	// menangkap data dan memasukkan ke variabel sesuai dengan kolumnya masing-masing
			$nama      =$data->val($i, 1);
  		
  		$stud_no    =$data->val($i, 2);
  		$jadwal =$data->val($i, 3);
    	$username   =$data->val($i, 4);
			$password   =$data->val($i, 5);
			$status =$data->val($i, 6);
			

	if($nama != "" && $stud_no != "" ){
		// input data ke database (table data_pegawai)
		{
			$enc_password = md5($password);
			$nama_siswa = mysqli_real_escape_string($conn, $nama);
			
		}
		mysqli_query($conn,"INSERT into student VALUES('','$nama','$stud_no','$jadwal','$username','$enc_password','$status')");
		
	}
}

// hapus kembali file .xls yang di upload tadi
unlink($_FILES['filesiswa2']['name']);

// alihkan halaman ke index.php
header("location:pengguna.php?berhasil=$berhasil");
?>
