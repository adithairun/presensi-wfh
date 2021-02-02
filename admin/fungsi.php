<?php

function query($data){
	global $koneksi;
	$perintah=mysqli_query($koneksi, $data);
	if(!$perintah) die("Gagal query :".mysqli_connect_error());
	return $perintah;
}
function showData(){
	$sql="SELECT * FROM student";
	$perintah=query($sql);
	return $perintah;
}
function update($type, $data){

	$sql="UPDATE student SET status='$type' WHERE stud_no IN ($data)";
	$perintah=query($sql);
	return $perintah;
	
}
	



?>