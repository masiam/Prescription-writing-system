<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="view.css">

 <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: deepskyblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 250px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%; 
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: skyblue;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>





 
    
  


   
<body>

<div class="sidebar">
     <img src="logo-no-background.png" height="100" width="280">
  <a  href="page.php"> <i class="fa fa-user-plus" style="font-size:24px"> New Patient</i></a>
  <a  href="view.php"> <i class="fa fa-eye" style="font-size:24px"> View Patient</i></a>
    <a class="active" href="drug.php"><i class='fas fa-pills' style='font-size:24px'> Drugs</i></a>
<!--  <a href="#about"><i class="fa fa-user-md" style='font-size:24px'> Doctor Details</i></a>-->
    <a href="prescription.php"><i class='fas fa-file-prescription' style='font-size:24px'> Prescription</i></a>
    <a href="login.php"><i class="fas fa-sign-out-alt" style='font-size:24px'>Logout</i></a>
</div>

<div class="content">
    <div class="container">
       
         <p style="text-align:center"><b>DRUG INFORMATION</b></p>
   
   <?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
	mysqli_select_db($con, "patient");
	$result = mysqli_query($con, "SELECT * FROM drug");
?>
        
<table>
<tr>
    <th> Drug ID</th>
<th> Trade name</th>
<th>Chemical Name</th>  
<th>Dosage</th>
    
</tr>
                
<?php
while($row = mysqli_fetch_array($result))
{
	echo "
    <tr align=center>
    <td>".$row['drugid'] . "</td>
	<td>".$row['trade_name'] . "</td>
	<td>" .$row['chemical_name'] . "</td>
     <td>".$row['dosage'] . "</td>
      
    
	</tr>
    ";
}
mysqli_close($con);
?>
</table>
          <br>
            <br>
        
            <a href="adddrug.php"><button style="font-size:25px;background-color:crimson;color:white;border:none;border-radius:10px"  >  Add New  <i class='fas fa-plus-square' style='font-size:24px'></i></button></a>
            
        
    </div>
   

    </div>
    
    
    



</body>
</html>


 
      
  
    
    
           

   
    
    
   

			
        
