<?php
session_start();

if(isset($_SESSION['isloggedin']) 
        && $_SESSION['isloggedin']==1)
{
    echo '  <div class="box">';
    echo  "Welcome ".$_SESSION['xyz'];
    echo '  <div class="b">';
    echo "<br/>
   
<a href='pages.php ' >Allow to access the content of website</a>";
    echo " </div>"; 
     echo " </div>"; 
}
else {  
    header('location:index.php');    
}
?>
<htm>
<body>
    <style type="text/css">
      body{
                    background-image: url(images/car_2.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                  position:center
                }
               
    .box {
  position: absolute;
  top: 40%;
  left:70%;
  transform: translate(-50%, -50%);
 
  padding: 2.5rem;
  box-sizing: border-box;
font-size:35px;
color:black;
font-style:italic;
  border-radius: 0.625rem;
   background: rgba(0, 0, 0, 0.6);
  width: 20rem;
  height:10rem;
}
.b{
   
    color:black;
  font-size:20px;

}
                </style>
</body>
</html>