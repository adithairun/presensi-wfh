<?php
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'wfh');
$koneksi = mysqli_connect(HOST, USER, PASS, DB);
if($koneksi==false):
	die("Gagal melakukan koneksi :".mysqli_connect_error());
endif;
?>
