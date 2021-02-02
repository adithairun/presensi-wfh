<?php	require_once '../akses/conn.php';	
if(ISSET($_POST['update'])){		
$stud_no = $_POST['stud_no'];		
$stud_id = $_POST['stud_id'];		
$nama = $_POST['nama'];		
$username = $_POST['username'];		
$jadwal = $_POST['jadwal'];		
$status = $_POST['status'];				
$password = $_POST['password'];				
{						
$nama = mysqli_real_escape_string($conn, $nama);			
	
}		
mysqli_query($conn, "UPDATE `student` SET `stud_no` = '$stud_no' , `nama` = '$nama', `jadwal` = '$jadwal', `username` = '$username', `password` = '$password', `status` = '$status' WHERE `stud_id` = '$stud_id'") or die(mysqli_error($conn));;		
echo "<script>alert('Successfully updated!')</script>";		echo "<script>window.location = 'edit-data.php'</script>";	}?>