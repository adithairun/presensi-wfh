<?php	require_once '../akses/conn.php';	
if(ISSET($_POST['submit'])){		
$stud_no = $_POST['stud_no'];		
$stud_id = $_POST['stud_id'];		
$nama = $_POST['nama'];		
$username = $_POST['username'];		
$password = $_POST['password'];		
$jadwal = $_POST['jadwal'];		

$aktif = $_POST['aktif'];		
			
{						
$nama = mysqli_real_escape_string($conn, $nama_siswa);			
$username = mysqli_real_escape_string($conn, $username);			
	
}		
mysqli_query($conn, "UPDATE `student` SET `stud_no` = '$stud_no' , `nama` = '$nama', `username` = '$username', `password` = '$password', `jadwal` = '$jadwal', `aktif` = '$aktif' WHERE `stud_id` = '$stud_id'") or die(mysqli_error($conn));;		
echo "<script>alert('Data Siswa Berhasil Diubah!')</script>";		echo "<script>window.location = 'student.php'</script>";	}?>