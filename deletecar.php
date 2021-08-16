<?php require_once 'connection.php'; 
 if(isset($_GET['i'])){    
     $id = $_GET['i']; 
 $query = "delete from car where id_car='$id'"; 
 mysqli_query($con, $query); 
 header('location:displaycar.php');                  } 
 ?>