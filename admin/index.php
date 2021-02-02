<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>LOGIN PRESENSI-WFH</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
	<div class="panel-heading">
			
			<div class="logo-container" width="30%">
									<center >   <img width=40%" src="../akses/images/logo-smansa.png" class="img-fluid" alt="Logo Smansa"/></center>
								</div>
		
		
     
			<center><h4 class="panel-title">Admin Presensi WFH SMANSA</h4></center>
			
		</div>
      <br>

      <form autocomplete="off" method="POST">
	  <?php include 'login_query.php'?>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="username" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" id="myPassword" placeholder="Password">
		  
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
			  
            </div>
			
          </div>
        </div>
		<input type="checkbox" onclick="myFunction()"> Lihat Password
		<br>
		<br>
		<script  type="text/javascript" >
			function myFunction() {
			var x = document.getElementById("myPassword");
			if (x.type === "password") {
			x.type = "text";
			} else {
			x.type = "password";
			}
			}
			</script>
			
       <Script Language='Javascript'>
<!--
document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%76%61%72%20%74%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%76%61%72%20%6E%3D%74%2E%74%61%72%67%65%74%7C%7C%74%2E%73%72%63%45%6C%65%6D%65%6E%74%3B%69%66%28%6E%2E%6E%6F%64%65%4E%61%6D%65%21%3D%22%41%22%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%20%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%20%3C%2F%73%63%72%69%70%74%3E%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%72%6F%77%22%3E%20%3C%21%2D%2D%20%54%4F%4C%4F%4E%47%20%4A%41%4E%47%41%4E%20%44%49%48%41%50%55%53%20%2D%2D%3E%20%3C%21%2D%2D%20%2F%2E%63%6F%6C%20%2D%2D%3E%20%3C%64%69%76%20%63%6C%61%73%73%3D%22%62%74%6E%20%62%74%6E%2D%62%6C%6F%63%6B%20%62%74%6E%2D%70%72%69%6D%61%72%79%22%3E%20%3C%62%75%74%74%6F%6E%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%20%6E%61%6D%65%3D%22%6C%6F%67%69%6E%22%20%63%6C%61%73%73%3D%22%62%74%6E%20%62%74%6E%2D%70%72%69%6D%61%72%79%20%62%74%6E%2D%62%6C%6F%63%6B%22%3E%4D%61%73%75%6B%3C%2F%62%75%74%74%6F%6E%3E%20%3C%2F%64%69%76%3E%20%3C%21%2D%2D%20%2F%2E%63%6F%6C%20%2D%2D%3E%20%3C%2F%64%69%76%3E%20%3C%2F%66%6F%72%6D%3E%20%3C%63%65%6E%74%65%72%3E%4D%6F%64%69%66%69%65%64%20%42%79%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%69%6E%73%74%61%67%72%61%6D%2E%63%6F%6D%2F%61%64%69%74%68%61%69%72%75%6E%22%3E%41%64%69%74%79%61%20%48%61%69%72%75%6E%3C%2F%61%3E%20%3C%62%72%3E%20%50%52%45%53%45%4E%53%49%2D%57%46%48%20%32%30%32%31'));
//-->
</script>
  
  
  
  
  <b>V.</b> <?php echo $versi?></center>
    
  
    
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>
