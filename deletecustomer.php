<?php require_once 'connection.php'; 
 if(isset($_GET['i'])){    
     $id = $_GET['i']; 
 $query = "delete from customer where id='$id'"; 
 mysqli_query($con, $query); 
 header('location:displaycustomer.php');      
 
 
 
 } 
 ?>