<?php
//connect database
session_start();
include("includes/db.php");
if ($_GET["status"]){
     $email=$_GET['pemail'];
    $status=$_GET['status'];
    $doctorid=$_SESSION['doctor_id'];
    $appointment_id=$_GET['apid'];
    $doctorname=$_SESSION['doctor_lastname'];
    
    if($status=='approved'){
        
        $send_message='your appointment has been approved ';
    } else if($status=='rejected'){
        $send_message='your appointment has been rejected';
    }
    echo $send_message;

 $message_query="INSERT INTO notifications(notification,send_date,pemail,doctor_id,appointment_id,doctor_name)VALUES(
  '$send_message by ',now(),'$email','$doctorid','{$appointment_id}','{$doctorname}')";
    $register=mysqli_query($connection,$message_query);
                        
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
    
    $update_appointment_status="UPDATE appointments SET status='".$status."' WHERE pemail='".$email."' LIMIT 1";   
      if(!mysqli_query($connection,$update_appointment_status))
                        {
                            die('QUERY FAILED'.$update_appointment_status.'<br />' . mysqli_error($connection));
                           
                        }
    
                        header ("Location: notifications.php");
                        exit();
}
?>