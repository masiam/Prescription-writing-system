<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="adddrug.css">



    </head>
<body>

<div class="sidebar">
     <img src="logo-no-background.png" height="100" width="280">
  <a  href="page.php"> <i class="fa fa-user-plus" style="font-size:24px"> New Patient</i></a>
  <a href="view.php"> <i class="fa fa-eye" style="font-size:24px"> View Patient</i></a>
    <a class="active" href="drug.php"><i class='fas fa-pills' style='font-size:24px'> Drugs</i></a>
<!--  <a href="#about"><i class="fa fa-user-md" style='font-size:24px'> Doctor Details</i></a>-->
    <a href="prescription.php"><i class='fas fa-file-prescription' style='font-size:24px'> Prescription</i></a>
    <a href="logindbms.html"><i class="fas fa-sign-out-alt" style='font-size:24px'>Logout</i></a>
    
        

</div>

<div class="content">
    <div class="container">
        <div class="imgcontainer">
    <img src="Untitled%20design%20(3).png" alt="Avatar" class="avatar">
  </div>
   <p> DRUG INFO</p>  
        
  <hr>  
    <form action="" method="post">
         <label> Drug id </label>   
<input type="text" name="did" placeholder= "Drug id" size="15" required />
 
        <label> Trade name </label>   
<input type="text" name="tname" placeholder= "Trade name" size="15" required />
 
  <label> Chemical name </label>   
<input type="text" name="cname" placeholder= "Chemical name" size="15" required />
 
         <label> Dosage </label>   
<input type="text" name="dsg" placeholder= "Dosage" size="15" required />
        
    <button type="submit" class="registerbtn">Register</button>    
</form>  
    </div>
    </div>
    
    <?php
    if(isset($_POST['tname'])&& isset($_POST['cname'])&& isset($_POST['dsg']) && isset($_POST['did'])) { 
   $did = $_POST['did'];     
$tname = $_POST['tname'];
$cname = $_POST['cname'];
$dsg=$_POST['dsg'];
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
mysqli_query($con, "INSERT INTO drug VALUES (' $did','$tname', '$cname','$dsg')") or die(mysqli_connect_error());
   
mysqli_close($con);
    }
?>
    
   


</body>
</html>
