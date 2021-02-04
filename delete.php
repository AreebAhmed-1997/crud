<?php
  $id =  $_GET['id'] ;
  require 'hasnain_con.php' ;

      
$sql = "delete from form where Student_id = '{$id}' ";

if ($conection->query($sql) === TRUE) {
   
     header("location: viewform.php");
} else {
  echo "Error deleting record: " . $conection->error;
}




?>