<html>
<?php
$pid = $_POST['pid'];
$pname = $_POST['pname'];
    $tname= $_POST['tname'];
    $cname=$_POST['cname'];
    $dose=$_POST['dose'];
    $vdate=$_POST['vd'];
    $dis=$_POST['dis'];
    $dur=$_POST['dur'];
    $dt=$_POST['dt'];
    $note=$_POST['note'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
   
$con = mysqli_connect("localhost","root","");
if (!$con)
{	
	die("Could not connect: " . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
mysqli_query($con, "INSERT INTO prescription VALUES ('$pid','$pname','$gender','$age','$tname','$cname','$dose','$vdate','$dis','$dur','$dt','$note')") or die(mysqli_connect_error());
echo "The data is succesfully inserted!!!";
mysqli_close($con);
?> 
<br /><a href="view.php">Go Back</a>
</html>
