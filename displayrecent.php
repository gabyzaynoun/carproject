<?php 
 require_once 'connection.php';
 $query = "select * from recent ";
 $result = mysqli_query($con, $query); 
 $nofrows = mysqli_num_rows($result); 
 if($nofrows==0){     
     echo "no recent yet!";  
     echo "<a href='Addrecent.php'>Add information about recention</a>"; 
     
 } 
 else {  
     ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<html>
<style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
 
background-image: url(images/cal.jpg );
                    background-repeat:no-repeat;
                    background-size:cover;
                  image-orientation:center;
 
}
            .container{
  background:#00f;
  position:relative;
  }
.car {
    position: absolute;
    z-index: 1;
    top: 306px;
    right:-50px;
	animation:run 10s infinite linear;
}
.car2 {
    top: 354px;
  right:50px;
      -webkit-animation-duration: 15s;
    animation-duration: 15s;
}
.car-body img{width:200px;}
.tair{
  position:absolute;
}.tair img{width:40px;animation:rotate 3s infinite linear;position:relative;}
.tair1{  
  left:35px;
  top:106px;
}
.tair2{  
  left:128px;
  top:106px;
}
@keyframes rotate{
  100% {transform: rotate(-360deg);}
}

@keyframes run{
  100% {transform:translateX(-1200px);}
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 25px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: yellow;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 700px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 700px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
a{
    color:red;
  
}

</style>


<body>
    <div class="topnav" id="myTopnav">
    <a href="AddCar.php" class="active">Car</a>
    <a href="Addcustomer.php">Customer</a>
    <a href="Addrecent.php">Recent</a>
      <a href="logout.php" style="margin-left:900px ;font-size:25px;font-style:bold">Logout</a>

</div>
<div  style="margin-left:800px ;margin-top:2px" >
<table border="1" > 
    <tr  >  
        <th >id car</th>     
        <th>id customer</th>    
        <th> date of return</th>  
        <th>date of recent</th>   
        <th>number of date</th>  
        
        <th>delete</th>  
    </tr>  
    </div>
        <?php    for($i=0; $i<$nofrows; $i++){    
            $row = mysqli_fetch_assoc($result);   
            echo "<tr>";     
            echo "<td>".$row['id_c']."</td>";  
            echo "<td>".$row['id_customer']."</td>"; 
            echo "<td>".$row['dateofreturn']."</td>"; 
            echo "<td>".$row['dateofrecent']."</td>";
             echo "<td>".$row['numberofdate']."</td>"; 
            
            $id = $row['id_c'];      
            echo "<td><a href='deleterecent.php?i=$id'>X</a></td>"; 
             
 echo "</tr>";    
 }       ?>  
</table> 
    <?php 
    
        } 
        ?> 
