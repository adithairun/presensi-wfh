<?php
	require_once '../akses/conn.php';
	
	if(ISSET($_POST['user_id'])){
		mysqli_query($conn, "DELETE FROM `user` WHERE `user_id` = '$_POST[user_id]'") or die(mysqli_error());
	}
?>