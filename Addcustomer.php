



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style type="text/css">
      body{
                    background-image: url(images/yellow-2563494_960_720.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
                }
                .box {
  position: absolute;
  top: 50%;
  left:30%;
  transform: translate(-50%, -50%);
  width: 28rem;
  padding: 1.5rem;
  box-sizing: border-box;
  font-style:bold;
   background: rgba(0, 0, 0, 0.5);
  
  
  height:20rem;
}
                


.class{
                    margin-left:10px;
                    margin-top:20px;
                   
                     width:900px;
                     height:300px;
}
  .content{
                    font-size:60px;
                   margin-left:20px;
                   font-style:bold;
                   color:black;
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
                 </style>
                 <html>
    <body>
<div class="topnav" id="myTopnav">
    <a href="AddCar.php" class="active">Car</a>
    <a href="Addcustomer.php">Customer</a>
    <a href="Addrecent.php">Recent</a>
       <a href="logout.php" style="margin-left:900px ;font-size:25px;font-style:bold">Logout</a>
</div>

        <form action="Addcustomer.php"  method ="POST">
            
            <div class="box">
             <div class="class">
               
                 <div class="content">
        <table>
            <tr>
                <th style="color:yellow ; font-size:20px;">  First Name </th>   
                <td> <input type="text"   name="FirstName" style=" font-size:20px" /></td>
                
            </tr>  
            <tr>
                <th style="color:yellow ; font-size:20px;"> Last Name </th>   
                <td> <input type="text"   name="LastName" style=" font-size:20px" /></td>
                
            </tr> 
            
              <tr>
                <th style="color:yellow ; font-size:20px;">  Phone </th>   
                <td> <input type="text"   name="phone" style=" font-size:20px" /></td>
                
            </tr>  
            <tr>
                <th style="color:yellow ; font-size:20px;"> Address </th>   
                <td> <input type="text"   name="address" style=" font-size:20px" /></td>
                
            </tr> 
              <tr>
                <th style="color:yellow ; font-size:20px;"> Birthday </th>   
                <td> <input type="text"   name="Birthday" style=" font-size:20px" /></td>
                
            </tr> 
        </table>
                 </div>
       <input type="submit"  size="80px" value ="Add Customer"   name="submit"
                       style=" color:black ; background-color:yellow;border-radius:20px 
                       ; margin-left:100px;font-size:30px; font-style:bold; margin-top:10px"  />
       </br> </br>
       <a href="displaycustomer.php" style="margin-top:10px; color:black; margin-left:100px;border-radius:20px "> Show All Customer If You Want </a>
             </div></div>
         </form>
    </body>
    <?php
require_once 'connection.php'; 
if( isset($_POST['submit'])){
 if( isset($_POST['FirstName']) && isset($_POST['LastName']) &&isset($_POST['phone'])&&isset($_POST['address'])&&isset($_POST['Birthday'])  ){   
     $firstname = $_POST['FirstName'];  
     $lastname = $_POST['LastName']; 
     $phone=$_POST['phone'];
     $address=$_POST['address'];
     $birthday=$_POST['Birthday'];
       $query = "INSERT INTO customer VALUES(null,'$firstname','$lastname','$phone','$address','$birthday')";
         
     if(mysqli_query($con, $query)){   
         header('location:Addcustomer.php');  
         } 
         else {                 
             echo "failure:".mysqli_error($con);     }    
             }                 
             else {
                 echo "something is wrong!";
             
             } 

}


?>