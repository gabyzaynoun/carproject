<style type="text/css">
                
                body{
                    background-image: url(images/FAQ.jpg);
                    background-repeat:no-repeat;
                    background-size:cover;
                  
                }
                
         .class{
                    margin-left:200px;
                    margin-top:20px;
                     opacity:70%;
                     width:700px;
                     height:200px;
                   
                    
                    
                }

                
                
                       body,h1{
            margin: 0;
            padding: 0;
            font-family: arial;
        }
        .text-contrainer h1{
            font-size: 50px;
            color: rgba(225,225,225,.1);
  background-image:url(images/yellow_black.jpg);
            background-repeat: repeat-x;
            -webkit-background-clip: text;
            animation: animate 30s linear infinite;
        }
        @keyframes animate{
            0%{
                background-position:left 0px top 10px;
                
            }
            40%{
                  background-position:left 500px top 10px;
            }
        }
        .text-contrainer{
            margin-top: 5%;
margin-left:5%;
        }
 
                
                
                
</style>
<html>
 <body>
     <form action="putnumber.php"  method ="POST"> 
      
     <div class="text-contrainer">
         <h1>
             <span >  Solve it</span> By Phone Number
            </h1>
     </div>
           <div class="class"> 
           
            <table >
                <tr > 
                    
                    <td > <input type="text"   name="phonenumber" style=" font-size:25px" placeholder="Enter Phone Number" style="text-align: center; width:100px;height:100px "/>  </td>
                </tr>
 
             
            </table>
   
                 <input type="submit"  size=80px" value ="Login Again "  
                       style=" color:black ; background-color:yellow;border-radius:20px 
                       ; margin-left:50px;font-size:30px; margin-top:20px"/> 
                        
           </div>
        
              </form > 
 </body>
</html>
  <?php
require_once 'connection.php';
if(isset($_POST['phonenumber']) ){
    
    $n=$_POST['phonenumber'];
  
    
   $query = "SELECT * FROM `login` WHERE phone='$n'";
 $result = mysqli_query($con, $query); 
 $nofrows = mysqli_num_rows($result);  
    if ($nofrows==1){
       header('location:Pages.php');
    }
    else{
       
        echo "<script>";
        echo "alert('this phone number incorrect')";
        echo "</script>";
        
    }
    
    
}



 else {
                 echo "phone are Emty";
             
             } 
             ?>