<?php
	session_start();
	require 'akses/conn.php';

	if(ISSET($_POST['login'])){
		$usernamex = addslashes(trim($_POST['usernamex']));
		$password = md5($_POST['password']);
		
		$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `username` = '$usernamex' && `password` = '$password' && status='YA'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		$query1 = mysqli_query($conn, "SELECT * FROM `student` WHERE `username` = '$usernamex' && status='TIDAK'") or die(mysqli_error());
		$row1 = $query1->num_rows;
		$query2 = mysqli_query($conn, "SELECT * FROM `student` WHERE `username` = '$usernamex' && status='TIDAK TERMASUK'") or die(mysqli_error());
		$row2 = $query2->num_rows;

		if($row > 0){
			$_SESSION['student'] = $fetch['stud_id'];
			
			header("location:home.php");
		}
		else if (($row2 > 0)){
			echo "<center><label class='text-danger'>MAAF BAPAK/IBU TIDAK TERMASUK DALAM DAFTAR WFH SIRANSIJA</label></center>";
		}else if (($row1 > 0)){
			echo "<center><label class='text-danger'>MAAF PEKAN INI BUKAN JADWAL WFH BAPAK/IBU</label></center>";
		}
		else{
			echo "<center><label class='text-danger'>Salah Username dan atau Password</label></center>";
		}
	//jika rememberme di klik
 if(!empty($_POST["remember"])) {
 //buat cookie
setcookie ("user_login",$_POST["usernamex"],time()+ (3600 * 365 * 24 * 60 * 60));
setcookie ("userpassword",$_POST["password"],time()+ (3600 * 365 * 24 * 60 * 60));
 
 //setcookie ("user_login",$_POST["usernamex"],time()+ (36000000 * 365 * 24 * 60 * 60));
 //setcookie ("userpassword",$_POST["password"],time()+ (3600000 * 365 * 24 * 60 * 60));
 } else {
 if(isset($_COOKIE["user_login"])) {
 setcookie ("user_login","");
    }
    if(isset($_COOKIE["userpassword"])) {
 setcookie ("userpassword","");
    }
 }
	}
	
 
	

?>
