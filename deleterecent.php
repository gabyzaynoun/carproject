<?php require_once 'connection.php'; 
 if(isset($_GET['i'])){    
     $id = $_GET['i']; 
 $query = "delete from recent where id_c='$id'"; 
 mysqli_query($con, $query); 
 header('location:displayrecent.php');                  } 
 ?>

