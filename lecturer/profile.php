<?php include('includes/header.php'); ?>

<body>

    <!-- Navigation -->
   <?php include('includes/navigation.php'); ?>
   <div class='container'>
    <?php echo $_SESSION['staff_id']; ?>
<?php

        $query=query("SELECT*FROM lecturers WHERE staff_id='{$_SESSION['staff_id']}' ");
        confirm($query);
        while($row=fetch_array($query))
        {
                        $fname=$row['fname'];                        
                        $lname=$row['lname'];                 
                      //  $designation=$row['designation'];                        
                        $email=$row['email'];
                        $tel_no=$row['tel_no'];
                        $staffid=$row['staff_id'];
                        $password=$row['password'];
                       // $qualification=$row['qualifications'];
                        $image=$row['image'];
        
  }
        
        
?>
    <!-- Modal -->
    <div class='account-wall' id='myModal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
        <div class='modal-dialog'>
            <div class='modal-content'>
                <div class='modal-header'>
                    <button type='button' class='close' data-dismiss='modal' aria-hidden='true'></button>
                    <h4 class='modal-title' id='myModalLabel'><?php echo ' '; echo $fname;  ?> </h4>
                    </div>
                <div class='modal-body'>
                    <center>
                 <?php  // echo '<td><img width='100' src='uploads/{$image}' alt=''></td>';?>
                    <img src='https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R' name='aboutme' width='140' height='140' border='0' class='img-circle'></a>
                    
                    <span><strong>Basic Info: </strong></span>
                        <ul>
                            <ol><strong>Email: </strong><span class='label label-warning'><?php echo $email?></span></ol>
                            <ol><strong>Tel No: </strong><span class='label label-info'><?php echo $tel_no?></span></ol>
                        
                    </center>
                    <hr>
                    <center>
                    
                    <br>
                    </center>
                </div>
                <div class='modal-footer'>
                    <center>                   
                    <?php echo "<a href='update.php?id={$staffid}' class='btn btn-default''>update profile</a>";?>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>