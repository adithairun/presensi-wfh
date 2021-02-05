<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '123');
define('DB', 'absen');
$koneksi = mysqli_connect(HOST, USER, PASS, DB);
if($koneksi==false):
	die("Gagal melakukan koneksi :".mysqli_connect_error());
endif;
?>
