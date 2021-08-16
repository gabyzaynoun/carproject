<?php
require_once 'connection.php'; 

 if( isset($_POST['pusername']) && isset($_POST['ppassword']) &&isset($_POST['pphone'])&&isset($_POST['paddress'])  ){   
     $n = $_POST['pusername'];  
     $p = $_POST['ppassword']; 
     $ph=$_POST['pphone'];
     $a=$_POST['paddress'];
     $query = "INSERT INTO login VALUES(null,'$n','$p','$ph','$a')";     
     if(mysqli_query($con, $query)){   
         header('location:index.php');  
         } 
         else {                 
             echo "failure:".mysqli_error($con);     }    
             }                 
             else {
                 echo "something is wrong!";
             
} 




?>
<style type="text/css">
      body{
                    background-image: url(images/khchab.jpg );
                    background-repeat:no-repeat;
                    background-size:cover;
                  position:center
                }
    .box {
  position: absolute;
  top: 50%;
  left: 75%;
  transform: translate(-50%, -50%);
 
  padding: 2.5rem;
  box-sizing: border-box;
  background: rgba(0, 0, 0, 0.4);
  border-radius: 0.625rem;
   width: 28rem;
  height:28rem;
}

.box h2 {
  margin: 0 0 1.4rem;
  padding: 0;
  color: #fff;
  text-align: center;
}

.box .inputBox {
  position: relative;
}

.box .inputBox input {
  width: 100%;
  padding: 0.625rem 0;
  font-size: 0.8rem;
  color: #fff;
  letter-spacing: 0.062rem;
  margin-bottom: 1.875rem;
  border: none;
  border-bottom: 0.065rem solid #fff;
  outline: none;
  background: transparent;
  
}

.box .inputBox label {
  position: absolute;
  top: 0;
  left: 0;
  padding: 0.625rem 0;
  font-size: 1.1rem;
  color:yellow;
  pointer-events: none;
  transition: 0.5s;
}

.box .inputBox input:focus ~ label,
.box .inputBox input:valid ~ label,
.box .inputBox input:not([value=""]) ~ label {
  top: -1.125rem;
  left: 0;
  color: black;
  font-size: 0.8rem;
}

.box input[type="submit"] {
  border: none;
  outline: none;
  color: black;
  background-color: yellow;
  padding: 0.625rem 1.25rem;
  cursor: pointer;
  border-radius: 0.312rem;
  font-size: 1rem;
margin-left:6rem;
}

.box input[type="submit"]:hover {
   background-color: black;
    color: yellow;
}

            
            
            </style>
    </head>
    <body>
      <div class="box">
          <h2><span style="color:black"> Create Your Private</span> <span style="color:yellow">  Account</span></h2>
   <form action="adduser.php"  method ="POST"> 
    <div class="inputBox">
        
      <input type="text"   name="pusername" style=" font-size:20px"   required value="" onkeyup="this.setAttribute('value', this.value);" />
      <label>Username</label>
    </div>
        <div class="inputBox">
        
      <input type="password"   name="ppassword" style=" font-size:20px"  required value=""
             onkeyup="this.setAttribute('value', this.value);"
             pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
             title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      <label>Password</label>
    </div>
        <div class="inputBox">
        
      <input type="text"   name="pphone" style=" font-size:20px"   required value="" onkeyup="this.setAttribute('value', this.value);" />
      <label>Phone</label>
    </div>
        <div class="inputBox">
        
      <input type="text"   name="paddress" style=" font-size:20px"   required value="" onkeyup="this.setAttribute('value', this.value);" />
      <label>Address</label>
    </div>
      
      
      
   
    <input type="submit" name="sign-in" value="Add account" name="submit">
  </form>
</div>
    </body>
</html>
