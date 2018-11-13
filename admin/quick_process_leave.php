<?php
//connect database
include('includes/db.php');
if ($_GET['status']){
     $emp_no=$_GET['emp_no'];
    $status=$_GET['status'];
    if($status=='approved'){
        
        $send_message='your leave has been approved';
    } else if($status=='rejected'){
        $send_message='your leave has been rejected';
    }
    echo $send_message;
    $message_subject='leave meassage no-reply';
 $message_query='INSERT INTO messages(`message_subject`,`message`,`send_date`,`emp_no`)VALUES('$message_subject',
  '$send_message',now(),'$emp_no')';
    $register=mysqli_query($connection,$message_query);
                        
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
    
    $update_leave_status='UPDATE leave_applied SET leave_status=''.$status.'' WHERE emp_no=''.$emp_no.'' LIMIT 1';
    $update_work_status='UPDATE employee SET work_status=''.$status.'' WHERE emp_no=''.$emp_no.'' LIMIT 1';
      if(!mysqli_query($connection,$update_leave_status))
                        {
                            die('QUERY FAILED'.$update_leave_status.'<br />' . mysqli_error($connection));
                           
                        }
    if(!mysqli_query($connection,$update_work_status)){
     die('QUERY FAILED'.$update_work_status.'<br />' . mysqli_error($connection));
    }
                        header ('Location: leavesapplied.php');
                        exit();
}
?>