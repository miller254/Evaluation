<?php session_start();?>
<?php include '../../includes/function.php';?>
<?php
if(isset($_SESSION['lecturer_email']))
{
 $_SESSION['lecturer_email']=null;
redirect('../../index.php');
    session_destroy();
}

elseif(isset($_SESSION['admin_email']))
{
 $_SESSION['admin_email']=null;
redirect('../../index.php');
    session_destroy();
}
?>