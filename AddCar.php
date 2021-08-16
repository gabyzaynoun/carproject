<?php
require_once 'connection.php'; 
if(isset($_POST['submit'])){
 if(!empty($_POST['Name']) && !empty($_POST['model']) &&!empty($_POST['color'])&&!empty($_POST['price'])){   
     $n = $_POST['Name'];  
     $m = $_POST['model']; 
     $c=$_POST['color'];
     $p=$_POST['price'];
    
       $query = "INSERT INTO car VALUES(null,'$n','$m','$c','$p')";
         
     if(mysqli_query($con, $query)){   
         header('location:AddCar.php');  
         } 
         else {                 
             echo "failure:".mysqli_error($con);     }    
             }                 
             else {
                 echo "something is wrong!";
             
} }

?>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
 
  
                    background-image: url(images/hhhh.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                    position:relative;
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

@media screen and (max-width: 800px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
   
    display: block;
  }
}

@media screen and (max-width: 500px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
     background: white;
    text-align: left;
  }
}
            .slideshow{
                margin: 0 auto;
                height: 500px;
                padding-top:30px;
                
                box-sizing: border-box;
                
            }
            .content{
                margin: auto;
                width: 100px;
                perspective: 1000px;
                position: relative;
                padding-top:20px;
                 padding-left:150px;
                
            }
            .content_carrousel{
                width: 100%;
                position: absolute;

                float: right;
                animation: rotar 15s infinite linear ;
                transform-style: preserve-3d;
            }
            .content_carrousel:hover{
                animation_play_state:paused; 
                cursor: pointer;
                
            }
            .content_carrousel figure{
                width: 100%;
                height: 120px;
                border: 1px solid #4d444d;
                overflow: hidden;
                position: absolute;
            }
            .content_carrousel figure:nth-child(1){
                transform:rotateY(10deg)translateZ(200px);
                
            }
               .content_carrousel figure:nth-child(2){
                transform:rotateY(100deg)translateZ(200px);
                
            }   .content_carrousel figure:nth-child(3){
                transform:rotateY(180deg)translateZ(200px);
                
            }   .content_carrousel figure:nth-child(4){
                transform:rotateY(220eg)translateZ(200px);
                
            }
               .content_carrousel figure:nth-child(5){
                transform:rotateY(300deg)translateZ(200px);
                
            
            }  
            .shadow{
                position: absolute;
                box-shadow: 0px 0px 20px 0px #000;
                border-radius: 2px;
                
            }
            .content_carrousel img{
                image-rendering:auto;
                transition: all 300ms;
                width: 100%;
                height: 100%;
            }
            .content_carrousel img:hover{
                transform: scale(1.2);
                transition: all 300ms;
            }
            @keyframes rotar{
                from{
                    transform:rotateY(0deg);
                }to{
                    transform:rotateY(360deg);
                }
                }
            




</style>
</head>
<body>

<div class="topnav" id="myTopnav">
    <a href="AddCar.php" class="active">Car</a>
    <a href="Addcustomer.php">Customer</a>
    <a href="Addrecent.php">Recent</a>
       <a href="logout.php" style="margin-left:900px ;font-size:25px;font-style:bold">Logout</a>

</div>
    <form action="AddCar.php"  method ="POST">
        <div style="margin-left:200px"  >   
        <table>
            <tr>
                <th style="color:black ; font-size:20px;">   Name </th>   
                <td> <input type="text"   name="Name" style=" font-size:20px" /></td>
                
            </tr>  
            <tr>
                <th style="color:black ; font-size:20px;"> Model </th>   
                <td> <input type="text"   name="model" style=" font-size:20px" /></td>
                
            </tr> 
            
              <tr>
                <th style="color:black ; font-size:20px;"> Color </th>   
                <td> <input type="text"   name="color" style=" font-size:20px" /></td>
                
            </tr>  
            <tr>
                <th style="color:black ; font-size:20px;">Price </th>   
                <td> <input type="text"   name="price" style=" font-size:20px" /></td>
                
            </tr> 
           
        </table>
                 
       <input type="submit"  size="80px" value ="Add Car"   name="submit"
                       style=" color:black ; background-color:yellow;border-radius:20px 
                       ; margin-left:100px;font-size:30px; font-style:bold; margin-top:10px"  />
       </br> </br>
       <a href="displaycar.php" style="margin-top:10px; color:black; margin-left:100px;border-radius:20px "> Show All Car If You Want </a>
        </div>
         </form>

<section class="slideshow">
            <div class="content">
            <div class="content_carrousel">
                <figure class="shadow"><img src="images/car_black.jpeg"></figure>
                <figure class="shadow"><img src="images/car_blue.jpeg"></figure>
                <figure class="shadow"><img src="images/car_red.jpeg"></figure>
                <figure class="shadow"><img src="images/car_yellow.jpg"></figure>
                <figure class="shadow"><img src="images/vert.jpg"></figure>
               
               
                 
            </div>
            </div>
        </section>

    

</body>





