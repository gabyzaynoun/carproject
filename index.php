
<html>
    <head>
        <meta charset="UTF-8">
        <title>   rent car </title>  
       
            <style type="text/css">
                
                body{
                    background-image: url(images/car.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                  
                }
                .class{
                    margin-left:400px;
                    margin-top:200px;
                     opacity:70%;
                     width:900px;
                     height:300px;
                    
                       background-color: #11ffee00;
                }
                
                .content{
                    font-size:60px;
                   margin-left:350px;
                   font-style:bold;
                   color:black;
                   .align{
                          margin-left:100px;
                       font-size:100px;
                       color:black;
                       font-style:bold;
                       
                   }
                   
                   
                
                   
            </style>
            
        
    </head>
    <body>
        <form action="index.php"  method ="POST"> 
        <div class="class"> 


           
            <div class="content">
                <label>  Login <span style="color:yellow">  Form</span></label> 
            </div>
            <div style="padding-top:50px">
            <table >
                <tr > 
                    <th  style=" padding-left:250px"> <img src="images/baseline_person_black_18dp.png"</th>
                    <td > <input type="text"   name="username" style=" font-size:30px" />  </td>
                </tr>
 
                <tr>  
                    <th  style=" padding-left:250px"> <img src="images/baseline_https_black_18dp.png"</th>
                    <td>  <input type="password"  name="password" style=" font-size:30px"  /></td>
            </tr>
             
              </table>  </div>

                <input type="submit"  size="80px" value ="Sign in "  name="submit" 
                       style=" color:black ; background-color:yellow;border-radius:20px 
                       ; margin-left:400px;font-size:30px; font-style:bold; margin-top:10px"  /> 
                </br> </br> 
                
               
               
               
       </div> 
              </form > 
              <form action="adduser.php"  method ="POST"> 
                <input type="submit"  size=80px" value ="Sign up "  
                       style=" color:black ; background-color:yellow;border-radius:20px 
                       ; margin-left:800px;font-size:30px"/> 
                        
                <a href="putnumber.php" style=" color:black; border-radius:20px;margin-left:30px ">Forget your Password?<span style="color:yellow"> Click Here </span> </a>
                       
                
                
              </form>
             
    </body>
    
</html>
 <?php
require_once 'connection.php';
if(isset($_POST['submit'])){
if(isset($_POST['username']) && isset($_POST['password'])){
    
    $user=$_POST['username'];
    $pass=$_POST['password'];
    
   $query = "SELECT * FROM `login` WHERE username='$user'and password='$pass'";
 $result = mysqli_query($con, $query); 
 $nofrows = mysqli_num_rows($result);  
    if ($nofrows==1){
       header('location:home.php');
       session_start();
    $_SESSION['isloggedin']=1;
    $_SESSION['xyz']=$user;

    }
    else{
       
        echo "<script>";
        echo "alert('Username and Password incorrect please try again!')";
        echo "</script>";
        
    }
    
    
}



 else {
                 echo "One Of the password Or username are Emty";
             
} }?>