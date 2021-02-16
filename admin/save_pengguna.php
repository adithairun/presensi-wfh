<?php
	require_once '../akses/conn.php';
	
	if(ISSET($_POST['save'])){
		$stud_no = $_POST['stud_no'];
		$nama = $_POST['nama'];
		$jadwal = $_POST['jadwal'];
		$username = $_POST['username'];
		$status = $_POST['status'];
		$password = md5($_POST['password']);
		
		mysqli_query($conn, "INSERT INTO `student` VALUES('', '$stud_no', '$nama', '$jadwal', '$username', '$password', '$status')") or die(mysqli_error());
		
		echo "<script>alert('Berhasil Tambah Pengguna')</script>";		echo "<script>window.location = 'pengguna.php'</script>";
	}
?>