
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
		<h1>DATA PENGGUNA PRESENSI WFH <br/>SMAN 1 GORONTALO</h1>
	</center>
     <?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=User Presensi WFH.xls");
	?>
	<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  	<th>NO</th>
					<th>NAMA</th>
					<th>NOMOR</th>
                    <th>JADWAL</th>
                    <th>USERNAME</th>
					
					
				

                </tr>
                </thead>
                <tbody>
               	<?php
				$no=1;
					$query = mysqli_query($conn, "SELECT * FROM student ORDER BY nama ASC") or die(mysqli_error());
					
					while($fetch = mysqli_fetch_array($query)){
				?>
					<tr class="del_student<?php echo $fetch['stud_id']?>">
						<th><?php echo $no++; ?></th>
                        <td><?php echo $fetch['nama']?></td>
						 
								
								<td><?php echo $fetch['stud_no']?></td>
                                <td><?php echo $fetch['jadwal']?></td>
                                <td><?php echo $fetch['username']?></td>



							
								
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

