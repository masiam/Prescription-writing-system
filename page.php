<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="patient.css">


    </head>
<body>

<div class="sidebar">
    <img src="logo-no-background.png" height="100" width="280">
  <a class="active" href="page.php"> <i class="fa fa-user-plus" style="font-size:24px"> New Patient</i></a>
  <a href="view.php"> <i class="fa fa-eye" style="font-size:24px"> View Patient</i></a>
    <a href="drug.php"><i class='fas fa-pills' style='font-size:24px'> Drugs</i></a>
<!--  <a href="#about"><i class="fa fa-user-md" style='font-size:24px'> Doctor Details</i></a>-->
    <a href="prescription.php"><i class='fas fa-file-prescription' style='font-size:24px'> Prescription</i></a>
    <a href="login.php"><i class="fas fa-sign-out-alt" style='font-size:24px'>Logout</i> </a>
    
 
        

</div>

<div class="content">
    <div class="container">
        <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>
   <p> PATIENT DETAILS</p>  
        
  <hr>  
    <form action="" method="post" target="_blank">
        <label> Patient ID </label>   
<input type="text" name="id" placeholder= "Patient ID" size="15" required />
 
  <label> Patient Name </label>   
<input type="text" name="name" placeholder= "Name" size="15" required />
 
<div>  
<label>   
Gender   
</label><br>  
<input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
  
</div>  
<label>   
Phone   
</label>  
<input type="text" name="phone" placeholder="Phone" size="10" />
        
  <label>   
Email  
</label>  
<input type="text" name="email" placeholder="Email" size="30" />

  
  

        
      

        
    <button type="submit" class="registerbtn">Register</button>    

    
    
        </form>
    </div>
    </div>
    
    
    
    
        
<?php
    if(isset($_POST['id'])&& isset($_POST['name'])&& isset($_POST['gender'])&& isset($_POST['phone'])&& isset($_POST['email'])) {  
$pid = $_POST['id'];
$pname = $_POST['name'];
    $gender= $_POST['gender'];
    $phno=$_POST['phone'];
    $email=$_POST['email'];
    
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
mysqli_query($con, "INSERT INTO patientdetails VALUES ('$pid', '$pname','$gender','$phno','$email')") or die(mysqli_connect_error());
mysqli_close($con);
    }
?> 



</body>
</html>