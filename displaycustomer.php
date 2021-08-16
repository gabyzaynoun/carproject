<?php 
 require_once 'connection.php';
 $query = "select * from customer ";
 $result = mysqli_query($con, $query); 
 $nofrows = mysqli_num_rows($result); 
 if($nofrows==0){     
     echo "no customer yet!";  
     echo "<a href='Addcustomer.php'>add customer</a>"; 
     
 } 
 else {  
     ?> 

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url(images/hello.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
 
  
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
table{
    background-color:yellow;
}

</style>


<body>
    <div class="topnav" id="myTopnav">
    <a href="AddCar.php" class="active">Car</a>
    <a href="Addcustomer.php">Customer</a>
    <a href="Addrecent.php">Recent</a>
      <a href="logout.php" style="margin-left:900px ;font-size:25px;font-style:bold">Logout</a>

</div>
<div  style="margin-left:400px ;margin-top:100px" >
<table border="1" > 
    <tr  >  
        <th >id</th>     
        <th>First Name</th>    
        <th>Last Name</th>  
        <th>Phone</th>   
        <th>Address</th>  
        <th>Birthday</th>
        <th>delete</th>  
       
    </tr>  
    </div>
        <?php    for($i=0; $i<$nofrows; $i++){    
            $row = mysqli_fetch_assoc($result);   
            echo "<tr>";     
            echo "<td>".$row['id']."</td>";  
            echo "<td>".$row['firstname']."</td>"; 
            echo "<td>".$row['lastname']."</td>"; 
            echo "<td>".$row['phone']."</td>";
             echo "<td>".$row['address']."</td>"; 
            echo "<td>".$row['birthday']."</td>";
            $id = $row['id'];  
            $id_edit=$row['id'];
            echo "<td><a href='deletecustomer.php?i=$id'>X</a></td>";
          
             
 echo "</tr>";    
 }       ?>  
</table> 
    <?php 
    
        } 
        ?> 
  
</body>
</br> </br>
<div style="margin-left:100px">
<h3  > Update Customer</h3>
<?php
require_once 'connection.php';
echo '<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />';
?>

<form  method="post" >
<select name="customer" id="sel">

<?php

$resultat = mysqli_query($con,"SELECT * FROM customer");
 while($row = mysqli_fetch_array($resultat)) {

	echo "<option  value=". $row['id'] . "> ". $row['firstname'] . "</option>";
	
	}?>
	<p> <input type="submit" name="submit" value="Update" class="sub">
  </form>
	
	<?php
	if(isset($_POST['submit'])){
		$f=$_POST['customer'];
	    echo "<form method=\"post\" action=\"displaycustomer.php\">";
	    $results=mysqli_query($con,"select * from customer where id='$f'");
		while ($rows = mysqli_fetch_array($results)){
	        echo "<input name=\"idd\" type=\"text\" id=\"id\" value=\"".$rows['id']."\">";
			echo "<input name=\"firstname\" type=\"text\" id=\"pfirstname\" value=\"".$rows['firstname']."\">";
			echo "<input name=\"lastname\" type=\"text\" id=\"plastname\" value=\"".$rows['lastname']."\">";
		  		echo "<input name=\"phone\" type=\"text\" id=\"pphone\" value=\"".$rows['phone']."\">";
	echo "<input name=\"address\" type=\"text\" id=\"paddress\" value=\"".$rows['address']."\">";
echo "<input name=\"birthday\" type=\"text\" id=\"pbirthday\" value=\"".$rows['birthday']."\">";
  }
  echo"<br> <br>";
       echo "<input type=\"submit\" value=\"saveUpdate\"  ></form>";

 }
  
?>
</select>  </div>
<?php

require_once 'connection.php';
if (!empty($_POST['idd']) && !empty($_POST['firstname'])){
 $id=$_POST['idd'];
 $name=$_POST['firstname'];
 $l=$_POST['lastname'];
 $nb=$_POST['phone'];
$a=$_POST['address'];
$b=$_POST['birthday'];
  mysqli_query($con,"update  customer set firstname='$name',lastname='$l',phone='$nb',address='$a',birthday='$b' where id=".$id);
  echo mysqli_connect_errno($con);
$con->close();
header('location:displaycustomer.php');}
?>
<?php


