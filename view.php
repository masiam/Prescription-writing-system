<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="viewpa.css">



    </head>
<body>

<div class="sidebar">
        <img src="logo-no-background.png" height="100" width="280">
  <a  href="page.php"> <i class="fa fa-user-plus" style="font-size:24px"> New Patient</i></a>
  <a class="active" href="view.php"> <i class="fa fa-eye" style="font-size:24px"> View Patient</i></a>
    <a href="drug.php"><i class='fas fa-pills' style='font-size:24px'> Drugs</i></a>
<!--  <a href="#about"><i class="fa fa-user-md" style='font-size:24px'> Doctor Details</i></a>-->
    <a href=prescription.php><i class='fas fa-file-prescription' style='font-size:24px'> Prescription</i></a>
    <a href="logindbms.html"><i class="fas fa-sign-out-alt" style='font-size:24px'>Logout</i></a>
</div>

<div class="content">
    <div class="container">
        <h2>PATIENT INFORMATION</h2>
        <div class="imgcontainer">
   
   <?php
	$con = mysqli_connect("localhost","root","");
	if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
	mysqli_select_db($con, "patient");
	$result = mysqli_query($con, "SELECT * FROM patientdetails");
?>
        
            <table>
<tr>
<th>Patientid</th>
<th>Name</th>
    <th>gender</th>
<th>conatact</th>
    <th>Email Address</th>
    <th>operation</th>
    <th>View</th>
</tr>
                
<?php
while($row = mysqli_fetch_array($result))
{
	echo "
    <tr align=center>
	<td>". $row['patient_id'] . "</td>
	<td>" . $row['patient_name'] . "</td>
     <td>" . $row['gender'] . "</td>
     <td>" . $row['patient_contact'] . "</td>
     <td>" . $row['email'] . "</td>
    <td><a href='delete.php? pid=$row[patient_id]'>Delete</td>
     <td><a href='viewpres.php? pid=$row[patient_id]'>View</td>
     
	</tr>
    ";
}
mysqli_close($con);
?>
</table>
    </div>
    </div>
    </div>
    </body>
   
</html>

			
        
