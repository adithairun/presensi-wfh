    <?php


date_default_timezone_set("Asia/Makassar");


//echo date_default_timezone_get();


?>
<?php

    backupDatabaseTables('localhost','root','','wfh');
    //membuat function backup database
    function backupDatabaseTables($dbHost,$dbUsername,$dbPassword,$dbName,$tables = '*'){
      //menghubungkan & memilih database
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
     //Mendapatkan semua Table dengan (*)
     if($tables == '*'){
      $tables = array();
      $result = $db->query("SHOW TABLES");
      while($row = $result->fetch_row()){
       $tables[] = $row[0];
      }
     }else{
      $tables = is_array($tables)?$tables:explode(',',$tables);
     }
     //Loop melalui Table
     foreach($tables as $table){
      $result = $db->query("SELECT * FROM $table");
      $numColumns = $result->field_count;
	  
    
            $result2 = $db->query("SHOW CREATE TABLE $table");
            $row2 = $result2->fetch_row();
     @ $return .= "\n\n".$row2[1].";\n\n";
      for($i = 0; $i < $numColumns; $i++){
       while($row = $result->fetch_row()){
        $return .= "INSERT INTO $table VALUES(";
        for($j=0; $j < $numColumns; $j++){
         $row[$j] = addslashes($row[$j]);
         
         if (isset($row[$j])) { $return .= '"'.$row[$j].'"' ; } else { $return .= '""'; }
         if ($j < ($numColumns-1)) { $return.= ','; }
        }
        $return .= ");\n";
       }
      }
      $return .= "\n\n\n";
     }
     //simpan file , alamat penyimpanan dan nama file
	 $time2append = (date('Y-m-d_H-i-s'));
     $handle = fopen('backup-db/'.$time2append. '__' .$dbName. '.sql','w+');
    // fwrite($handle,$return);
	fwrite($handle,$return);
	
     fclose($handle);
	 echo "<script>alert('Backup Database Berhasil !')</script>";
echo "<script>window.location = 'home.php'</script>";
    }