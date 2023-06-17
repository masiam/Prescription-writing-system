<!DOCTYPE html>
<html>
<head>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel=stylesheet href="prescribe.css">

<style>
    div.info
    {
        color:blue;
        font-size: 30px;
        
    }
    
    </style>

    </head>
<body>

<div class="sidebar">
     <img src="logo-no-background.png" height="100" width="280">
  <a  href="page.php"> <i class="fa fa-user-plus" style="font-size:24px"> New Patient</i></a>
  <a href="view.php"> <i class="fa fa-eye" style="font-size:24px"> View Patient</i></a>
    <a href="drug.php"><i class='fas fa-pills' style='font-size:24px'> Drugs</i></a>
<!--  <a href="#about"><i class="fa fa-user-md" style='font-size:24px'> Doctor Details</i></a>-->
    <a class="active" href="prescription.php"><i class='fas fa-file-prescription' style='font-size:24px'> Prescription</i></a>
    <a href="login.php"><i class="fas fa-sign-out-alt" style='font-size:24px'>Logout</i></a>
    
        

</div>
  

<div class="content">
    <div class="container">
        <div class="imgcontainer">
   <img src="Untitled%20design%20(2).png" alt="Avatar" class="avatar">
  </div>
       <div class="info">
       
       Dr.Sharlene Rose,M.D.
        <br>
         General Medicine
            <br>
        Ph.No: 9972724965
           </div>
        
        
   <p> PRESCRIPTION</p>  
        
  <hr>  
    <form action="insertpres.php" method="post" class="forms" target="_blank">
      Patient ID: <select id="pid" name="pid" required>
        
<?php

require "database.php";
            
            $cdquery="SELECT patient_id FROM patientdetails";
            $cdresult=mysqli_query($link,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['patient_id'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
            
            }
?>
    
</select>
  <label> Patient Name </label>   
<select id="pname" name="pname" required>
        <?php

require "database.php";
            
            $cdquery="SELECT patient_name FROM patientdetails";
            $cdresult=mysqli_query($link,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['patient_name'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
            
            }
?>
        </select>  
        <br><br>
        
        Gender:
       <input type="radio" value="Male" name="gender" checked > Male   
<input type="radio" value="Female" name="gender"> Female   
<input type="radio" value="Other" name="gender"> Other  
        <br><br>
   
        
       Age: <input type="text" placeholder="Enter the age" name="age">
        
        
        
        
        
        
 <br><br>
       
   <label> Trade name </label>   
<select id="tname" name="tname" required>
        <?php

require "database.php";
            
            $cdquery="SELECT trade_name FROM drug ";
            $cdresult=mysqli_query($link,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";
     echo " <option value = \"\" >
                    
                </option>";
    

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['trade_name'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
                
                
            }
?>
        </select> 
        
         <label> Chemical name </label>   
<select id="cname" name="cname" required>
        <?php

require "database.php";
            
            $cdquery="SELECT chemical_name FROM drug ";
            $cdresult=mysqli_query($link,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";
     echo " <option value = \"\" >
                    
                </option>";
    

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['chemical_name'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
                
                
            }
?>
        </select> 
        
    <label> Dosage </label>   
<select id="dose" name="dose" required>
        <?php

require "database.php";
            
            $cdquery="SELECT dosage FROM drug ";
            $cdresult=mysqli_query($link,$cdquery);
        
	
            echo " <option value = \"\" >
                    
                </option>";
     echo " <option value = \"\" >
                    
                </option>";
    

            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow['dosage'];

            echo " <option value = \"$cdTitle\" >
                    $cdTitle
                </option>";
                
                
            }
?>
        </select>
       
        <br> <br>
   <label for="VisitDate">Visit Date:</label>
<input type="date" id="vd" name="vd">
    <br><br>    
        <label for="disease">Disease:</label>
<input type="text" id="dis" name="dis">
        
        
        <label for="duration">Duration:</label>
        <input type="text" id="dur" name="dur">

<!--
<select name="dt">
  <option name="dt" value="days">Days</option>
  <option  name="dt" value="weeks">Weeks</option>
  <option  name="dt" value="months">Months</option>
  
</select>
-->
        
  <label for="duration">Select the duration:</label>
<select name="dt" id="dt">
  <option value="days" selected>Days</option>
  <option value="weeks">Weeks</option>
  <option value="months">Months</option>
 
</select>   
        
        
        <br><br>
        
    <label for="note">Additionals</label>

<textarea id="note" name="note" rows="4" cols="50">

        </textarea>
        
        
        
        
        
        
        
        
        
        
        <button type="submit" class="registerbtn">Print</button>  
</form>  
</div>
    </div>
    
    
   


</body>
</html>