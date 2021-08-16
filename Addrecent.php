
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
    
    clas{
        
        width:400px;
        height:300px;
     
    }
    
      body{
                    background-image: url(images/aa.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                    position:relative;
                   margin: 0;
  font-family: Arial, Helvetica, sans-serif;
                }
    
 .box {
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%, -50%);
  width: 28rem;
  padding: 1.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.05);
  
  
  height:28rem;
}
.clas{
    font-size:20px;
    color:yellow;
    font-style:bold;
   
}
.selecting {
   width:160px;
   font-size:15px;
    border-radius: 0.5rem;
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
    
    <?php
require_once 'connection.php'; 
if( isset($_POST['submit'])){

 if( isset($_POST['dateofreturn']) && isset($_POST['dateofrecent']) &&isset($_POST['numberofdate'])){
     $dateofreturn = $_POST['dateofreturn']; 
     $dateofrecent=$_POST['dateofrecent'];
     $numberofdate=$_POST['numberofdate'];
    $idcar=$_POST['emp'];
    $idcustomer=$_POST['emp2'];
       $query = "INSERT INTO recent VALUES('$idcar','$idcustomer','$dateofreturn','$dateofrecent','$numberofdate')";
         
     if(mysqli_query($con, $query)){   
         header('location:Addrecent.php');  
         } 
         else {                 
             echo "failure:".mysqli_error($con);     }    
             }                 
             else {
                 echo "field are emty!";
             
} }




?>   
    
    
    
    
    <html>
    <div class="topnav" id="myTopnav">
    <a href="AddCar.php" class="active">Car</a>
    <a href="Addcustomer.php">Customer</a>
    <a href="Addrecent.php">Recent</a>
      <a href="logout.php" style="margin-left:900px ;font-size:25px;font-style:bold">Logout</a>

</div>
   
    
    </html>
    
    <form action="Addrecent.php" method="POST">
        <div class="box">
       <?php
require_once 'connection.php'; 
         $query = "select * from car ";
 $result = mysqli_query($con, $query); 

 echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> <br> <div class='clas'> Select id  Car  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp:&nbsp;<select  name='emp'  class='selecting'>  </div>";
        while($row= mysqli_fetch_array($result)){
            echo" <option value=".$row['id_car'].">".$row['id_car']."</option>";
        
           
        }
           echo"</select>" ;
           
                 $query2 = "select * from customer ";
 $result2 = mysqli_query($con, $query2); 

 echo "  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> <br> <div class='clas'> Select id Customer:&nbsp;<select  name='emp2'  class='selecting'>  </div>";
        while($row2= mysqli_fetch_array($result2)){
            echo" <option value=".$row2['id'].">".$row2['id']."</option>";
        
           
        }
           echo"</select>" ;
              
           
     ?>   

     
    
    <html>
        <body>
          
            </br> </br>      

                <label style="color:yellow ; font-size:20px;"> Date of return &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label> 
                <input type="date"   name="dateofreturn" style=" font-size:15px ;   border-radius: 0.5rem;"  />
                     
              
               </br> </br>   

                <label style="color:yellow ; font-size:20px;"> Date of recent &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;:</label>   
                <td> <input type="date"   name="dateofrecent" style=" font-size:15px;   border-radius: 0.5rem;" />
               
                 </br> </br> 
                <label style="color:yellow; font-size:20px;"> Number of date  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label>   
                 <input type="text"   name="numberofdate" style=" font-size:12.9px ;   border-radius: 0.5rem;" />
                 </br> </br> 
                 <input type="submit"  size="50px" value ="Add recent"   name="submit"
                       style=" color:black ; background-color:yellow;border-radius:20px 
                        ; margin-left:90px;font-size:30px; font-style:bold;    border-radius: 0.5rem;"  />
                  </br> </br>
                  <a href="displayrecent.php" style=" color:black; margin-left:20px;border-radius:20px "> Show All Recent Car If You Want </a>
        </div>
            
        </body>  
     
    </html>
    
    
    
    </form>
 
    
    
    
    