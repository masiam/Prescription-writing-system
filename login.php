

 
    




<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="logindbms.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
<link rel="icon" href="/Make_My_Career-logo.png"> 

<style>
  body{
    
  font-family: 'Quicksand', sans-serif;}
</style>
</head>
   
<body>
    
     <h2 style="color:blue;font-size:40px;">Login</h2>
    
    

    <div class="container2">
        
     
<form action="logintest.php" method="post">
  <div class="imgcontainer">
    <img src="logo-no-background.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="email" placeholder="Enter Email" name="username" required>

    <label for="passwprd"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="save" style="font-size:15px ">Login</button>
   
  </div>
 
  <div class="container" style="background-color:gainsboro">
    <span class="newuser"> New User?</span>
      <a href="signup.html"><button type="button" class="signupbtn">SignUp</button></a>
    <span class="psw"> <a href="#">Forgot password?</a></span>
  </div>
</form>
    </div>
    
    </body>
</html> 
