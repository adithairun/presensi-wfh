<?php
	require_once 'akses/conn.php';
	if(ISSET($_REQUEST['store_id'])){
		$store_id = $_REQUEST['store_id'];

		$query = mysqli_query($conn, "SELECT * FROM `storage` WHERE `store_id` = '$store_id'") or die(mysqli_error());
		$fetch  = mysqli_fetch_array($query);
		$filename = $fetch['filename'];
		$stud_no = $fetch['stud_no'];
		header("Content-Disposition: attachment; filename=".$filename);
		header("Content-Type: application/octet-stream;");
		//readfile("files/".$stud_no."/".$filename);
		echo file_get_contents("files/".$stud_no."/".$filename);
	}
?>
