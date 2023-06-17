<html>
<?php
$pid = $_POST['id'];
$pname = $_POST['name'];
    $gender= $_POST['gender'];
    $phno=$_POST['phone'];
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
mysqli_query($con, "INSERT INTO patientdetails VALUES ('$pid', '$pname','$gender',$phno)") or die(mysqli_connect_error());
echo "The data is succesfully inserted!!!";
mysqli_close($con);
?> 
<br /><a href="page.html">Go Back</a>
</html>
