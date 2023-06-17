<html>
<?php
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
?> 
</html>
