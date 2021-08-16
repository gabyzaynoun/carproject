<?php 
 
 
$db_hostname = 'localhost';

$db_database = 'car_project'; 
$db_username = 'root';
$db_password =""; 
 $con = mysqli_connect($db_hostname,$db_username,$db_password,$db_database); 
 if(mysqli_connect_error()){       
     echo "failed to connect: ".mysqli_connect_error(); } 
 
 
?> 