

<?php
// koneksi database
	include '../akses/conn.php';



// menghapus data dari database
mysqli_query($conn,"TRUNCATE TABLE student");

// mengalihkan halaman kembali ke index.php

header("location:student.php");

?>
