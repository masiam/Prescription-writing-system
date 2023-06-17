
<?php 

     
    // Database Link
    include('database.php'); 
 
      //Taking form Data From User
      $username = mysqli_real_escape_string($link, $_POST['username']);
      $password = mysqli_real_escape_string($link,  $_POST['password']); 

       
                
          //matching email and password
 
            $query = "SELECT * FROM login WHERE username='$username'";
            $result = mysqli_query($link, $query);
            $row = mysqli_fetch_array($result);

            if (isset($row)) {
                if ($password == $row[3]) {
 
                    //session variables to keep user logged in
                    $_SESSION['id'] = $row['id'];  
 
                      //Logged in for long time untill user didn't log out
                    header("Location: page.php");
 
                } else {
                    $error2 = "Combination of email/password does not match!";
                     }
   
            }  else {
                $error2 = "Combination of email/password does not match!";
                 }

?>