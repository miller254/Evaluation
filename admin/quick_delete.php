<?php
//connect database
session_start();
include('includes/db.php');
if ($_GET['delete']){    
   $doctorid=$_GET['doctor_id'];
   
    
   
 $delete_query='DELETE FROM DOCTORS WHERE doctor_id='{$doctorid}'';
  
    $register=mysqli_query($connection,$delete_query);
                        
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
    
  
    
                        header ('Location: notifications.php');
                        exit();
}
?>