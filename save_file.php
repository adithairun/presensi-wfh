<?php

	require_once 'akses/conn.php';
    date_default_timezone_set("Asia/Makassar");
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['stud_no'];
		$file_name = $_FILES['file']['name'];
		$file_type = $_FILES['file']['type'];
		$file_temp = $_FILES['file']['tmp_name'];
		$date = (date('Y-m-d'));
		$jam = (date('H:i:s'));
		$nama = $_POST['nama'];
		$absen = $_POST['absen'];
		$ext	= pathinfo($file_name); 
		$new_name  = (date('Y-m-d-h:i:s')) . '-' .$nama . '-' .$absen . '.' . $ext;
		$location = "files/".$stud_no."/".$new_name ;
		
		
		
		if(!file_exists("files/".$stud_no)){
			mkdir("files/".$stud_no);
		}
{						
$nama = mysqli_real_escape_string($conn, $nama);			
	
}
		if(move_uploaded_file($file_temp, $location)){
			mysqli_query($conn, "INSERT INTO `storage` VALUES('', '$new_name', '$file_type','$date', '$jam','$stud_no','$nama','$absen')") or die(mysqli_error($conn));
			echo "<script>alert('Berhasil Simpan Presensi')</script>";		echo "<script>window.location = 'home'</script>";
		}
	}
?>
