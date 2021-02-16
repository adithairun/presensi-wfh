<?php
require '../akses/validator.php';

// koneksi database
include '../akses/conn.php';
 
// menangkap data id yang di kirim dari url
$stud_id = $_GET['stud_id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from student where stud_id='$stud_id'");
 
// mengalihkan halaman kembali ke index.php
echo "<script>alert('Berhasil Hapus Pengguna')</script>";		echo "<script>window.location = 'edit-data.php'</script>";
 ?>