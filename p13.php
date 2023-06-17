<html>
<?php
$r = $_POST['regno'];
$n = $_POST['nm'];
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"test");
mysqli_query($con, "INSERT INTO temp VALUES ('$r', '$n')") or die(mysqli_connect_error());
echo "The data is succesfully inserted!!!";
mysqli_close($con);
?> 
<br /><a href="p12.html">Go Back</a>
</html>
