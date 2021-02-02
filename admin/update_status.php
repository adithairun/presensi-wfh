<?php

include '../akses/conn.php';
$stud_no = $_POST['stud_no'];
$status = $_POST['status'];
/*
$filename = $_POST['filename'];
$file_type = $_POST['file_type'];
$date_uploaded = $_POST['date_uploaded'];
$perbaiki = $_POST['perbaiki'];
$kontak = $_POST['kontak'];
filename = '$filename', file_type='$file_type', date_uploaded='$date_uploaded', perbaiki='$perbaiki', kontak='$kontak',
*/

mysqli_query($conn,"UPDATE storage SET status='$status'  WHERE stud_no='$stud_no'") or die(mysqli_error($conn));;
echo "<script>alert('Status Perbaikan Diperbarui!')</script>";
echo "<script>window.location = 'perbaiki_siswa.php'</script>";
?>
