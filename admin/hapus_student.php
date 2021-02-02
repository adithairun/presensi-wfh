<?php
// koneksi database
include '../akses/conn.php';
 
// menangkap data id yang di kirim dari url
$store_id = $_GET['store_id'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from student where store_id='$store_id'");
 
// mengalihkan halaman kembali ke index.php
header("location:student.php");
 ?>