<!DOCTYPE html>
<?php


	
	require_once '../akses/conn.php'

?>

<html>
<head>
	<title>Export Data Ke Excel Dengan PHP - www.malasngoding.com</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	
 
	<center>
		<h1>DATA PRESENSI WFH <br/>SMAN 1 GORONTALO</h1>
	</center>
    <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Pegawai.xls");
	?>
	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>NO</th>
					<th>NAMA</th>
					<th>PRESENSI</th>
                    <th>TANGGAL</th>
                    <th>JAM</th>
					
					
				

                </tr>
                </thead>
                <tbody>
               	<?php
				$no=1;
					$query = mysqli_query($conn, "SELECT * FROM storage ORDER BY date_uploaded,nama,  absen, jam DESC") or die(mysqli_error());
					
					while($fetch = mysqli_fetch_array($query)){
				?>
					<tr class="del_student<?php echo $fetch['stud_id']?>">
						<th><?php echo $no++; ?></th>
                        <td><?php echo $fetch['nama']?></td>
						 
								
								<td><?php echo $fetch['absen']?></td>
                                <td><?php echo $fetch['date_uploaded']?></td>
                                <td><?php echo $fetch['jam']?></td>



							
								
					</tr>
							
                    <?php

}

?>
   "<script>window.location = 'student_profile.php'</script>"			

            
             <!--

								 | <button class="btn btn-danger btn_remove" type="button" id="<?php echo $fetch1['store_id']?>"><span class="glyphicon glyphicon-trash"></span> Remove</button>
-->
 
<!--

							<button  class="btn btn-info">	 <a style="color:white" href="edit.php?stud_no=<?php echo $fetch['stud_no'];?>" <span class="ion-refresh" ></span> Update</button></a>
-->
		</tr>
	</table>
    
</body>
</html>