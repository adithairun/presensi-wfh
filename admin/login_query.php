<?php
	session_start();
	require '../akses/conn.php';
	
	if(ISSET($_POST['login'])){
		$username = addslashes(trim($_POST['username']));
		$password = md5($_POST['password']);
		$status = "administrator";
		$query = mysqli_query($conn, "SELECT * FROM `user` WHERE `username` = '$username' && `password` = '$password' && `status` = '$status'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['user'] = $fetch['user_id'];
			$_SESSION['status'] = $fetch['status'];
			header("location:home");
		}else{
			echo "<center><label class='text-danger'>Invalid username or password</label></center>";
		}
	}
?>