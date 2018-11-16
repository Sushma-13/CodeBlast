<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
    <title>Login</title>
</head>
<body>
    <header>
    <h1 style="text-align:center; ">CodeBlast</h1>
    </header>
    <div class="container">
    <div class="admin-div" >
    <h2>ADMIN</h2>
        <p>If admin, login here....</p>
        <input type="button" class="button1"  value="Admin" onclick="showDiv()" />
        
        <script type="text/javascript">
         <!--
            function showDiv() {
                       document.getElementById('welcomeDiv').style.display = "block";
                         }
         //-->
      </script>
        
        <br>
        <div id="welcomeDiv" style="display:none;" class="forms">
            <h3><ul>Admin Login</ul></h3>
    <form action="adminlogin.php" method="post">
        <label>User Name :</label></br>
        <input type="text" name="user" ></br>
        <label>Password :</label></br>
    <input type="password" name="password" ></br></br>
        <input class="button1" type="submit" name="Submit" ></br>
    </form> 
    </div>
    
 </div>


<div class="login-div">                                  
    <h1 style="text-align:center; ">Participants</h1>
    <div class="forms" style="float:left; "><h3><ul>Login Form</ul></h3>
    
        <form action="validation.php" method="post">
        
            <label>User Name :</label></br>
            <input type="text" name="user" ></br>
            <label>Password :</label></br>
            <input type="password" name="password" ></br></br>
            <input class="button1" type="submit" name="Submit" ></br>
        </form> 
    </div>
                                                                                 
                                          
                                          
   <div class="forms" style="float:left; margin-left:60px;" ><h3><ul>SignUp Form</ul></h3>
     
       <form action="registration.php" method="post">
       
           <label>User Name :</label></br>
           <input type="text" name="user" ></br>
           <label>Password :</label></br>
           <input type="password" name="password" ></br></br>
           <input class="button1" type="submit" name="Submit" ></br>
       </form> 
   </div>

</div> 
<div class="writeup">
    <br><br><br><br>
<p>This is the prelims round of CodeBlast..</p>
    <p>You will have Objective questions having 4 options each. Select one and submit the test when done.</p>
    <p>Please wait for the result,unless anounced.</p>

</div>


</div>
</body>
      

</html>