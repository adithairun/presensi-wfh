
<!DOCTYPE html>
<?php


	require '../akses/validator.php';
	require_once '../akses/conn.php'

?>

<html>
<head>
	<title></title>
</head>
<body>
	
 
	
 
	<center>
		<h1>DATA PRESENSI WFH <br/>SMAN 1 GORONTALO</h1>
	</center>
     <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Presensi WFH.xls");
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
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
