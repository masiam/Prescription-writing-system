<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="view.css">
<style>
  
body
    {
       font-size:30px;
        padding:50px;
        
        
    
    }
    
.imagecontain {
  position:sticky;
/*  text-align: center;*/
  color: black;
    font-size:25px;
    margin-top: 0px;
    
}    
    
    
    
    @media print {
  #printPageButton {
    display: none;
  }
}
    
    
    
    #printPageButton {
        
      font-size:25px;
        background-color: crimson;
/*         background-color: deepskyblue;  */
  color: white;  
  padding: 16px ;  
  margin-left:300px;  
        width:20%;
  border: none;  
  cursor: pointer;  
 
  opacity: 1;
        
        
    }
    img.image
{
    height:1000px;
    width:900px;
/*    padding-left:300px;*/
/*    padding-right: 250px;*/
    
    }
    
    .align {
  position: absolute;
  top: 60%;
  left: 35%;
  transform: translate(-50%, -50%);
  padding: 40px;
    
    }
    
        
        
    
    </style>


    </head>
<body>
<div class="imagecontain">
    
    <img src="Beige%20Black%20Clean%20&%20Minimal%20Business%20Notepad%20(1).png" class="image">  
    
    
<div class="align">
    
    <?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
  die('Could not connect: ' . mysqli_connect_error());
}
mysqli_select_db($con,"patient");
$patient_id=$_GET['pid'];
$result = mysqli_query($con, "SELECT pid,patient_name,gender,age,trade_name,chemical_name,dosage,visitdate,dis,dur,duration,note FROM prescription where pid='$patient_id'");
?>




<?php
while($row = mysqli_fetch_array($result))
{
    
      echo "Date:". "      ". $row['visitdate'];
    
     echo "<br />";
    echo "<br />";
    
	echo "Patient id:" . "  " . $row['pid'] ;
    echo "<br />";
    echo "Patient Name:" . "   " . $row['patient_name'];
    echo "<br />";
   echo "Gender:" . "  " . $row['gender'];
    echo "<br />";
    echo "Age" . "   " . $row['age'];
   
  
    echo "<br />";
    echo "<br />";
   
    
     echo "Diagnosis:" . "  " . $row['dis'];
     echo "<br />";
   
     
     
    
     echo "<br />";
    
    echo "Medicines:" . "  " . $row['trade_name'] ." - " . $row['chemical_name']. " ". " ( ".  $row['dosage']. " ) ";
    
	echo "<br />";
     
     echo "<br />";
    
   
  echo "Duration:" . "  " . $row['dur'] ." ". $row['duration']. "  ". " ( ". $row['note']. " ) "; 
     
    
     echo "<br />";
    
}
    

mysqli_close($con);
?> 
    </div>
    
    </div>
    
    

    <button id="printPageButton" onClick="window.print();">Print</button>
    
  

   


   
    </body>
</html>
