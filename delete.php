<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
$patient_id=$_GET['pid'];
$query="DELETE FROM patientdetails WHERE patient_id='$patient_id'";

$data=mysqli_query($con,$query);

if($data)
{
    echo"<font color='green'>Record deleted";
    
}
else
{
    echo"failed";
}
?>