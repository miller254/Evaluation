
<?php include('includes/header.php'); ?>

<body>

    <!-- Navigation -->
   <?php include('includes/navigation.php'); ?>


    <!-- Page Content -->
    <div class='container'>
    <?php echo $_SESSION['staff_id']; ?>
<?php

        $query=query("SELECT*FROM lecturers WHERE staff_id='{$_SESSION['staff_id']}' ");
        confirm($query);
        while($row=fetch_array($query))
        {
                        $fname=$row['fname'];                        
                        $lname=$row['lname'];                 
                        //$designation=$row['designation'];                        
                        $email=$row['email'];
                        $tel_no=$row['tel_no'];
                        $staffid=$row['staff_id'];
                        $password=$row['password'];
                        //$qualifications=$row['qualifications'];
        
  }
        
        
?>
    
        <!-- /.row -->
        <div class='account-wall'>
               <h1 class='text-center'><?php echo' '; echo $fname;echo ' '; echo $lname;?></h1>
                <img class='profile-img' src='uploads/create_thumb.png'
                    alt=''>
                
            <form class='form-horizontal' method='post'>
            <?php update_lec(); ?>
  <div class='form-group'>
    <label for='first_name'   class='col-sm-4 control-label'>First Name</label>
    <div class='col-md-4'>
      <input type='text' class='form-control' name='firstname' value='<?php echo $fname;?>' placeholder='First Name' disabled>
    </div>
  </div>
  <div class='form-group'>
    <label for='last_name' class='col-sm-4 control-label'>Last Name</label>
    <div class='col-md-4'>
      <input type='text' class='form-control' name='lastname' value='<?php echo $lname;?>' placeholder='Last Name' disabled>
    </div>
  </div>  
     
   <div class='form-group'>
    <label for='Email' class='col-sm-4 control-label'>Email</label>
    <div class='col-md-4'>
      <input type='email' class='form-control' name='email' value='<?php echo $email;?>' placeholder='Email'>
    </div>
  </div>
  <div class='form-group'>
    <label for='mobile_no' class='col-sm-4 control-label'>Telephone No</label>
    <div class='col-md-4'>
      <input type='text' class='form-control' name='tel_no' value='<?php echo $tel_no;?>' placeholder='telephone number' >
    </div>
  </div>
   <div class='form-group'>
    <label for='Soldier Rank' class='col-sm-4 control-label'>Staff ID</label>
    <div class='col-md-4'>
      <input type='text' class='form-control' name='staff_id' value='<?php echo $staffid;?>' placeholder='Staff Id' disabled>
    </div>
  </div><div class='form-group'>
    <label for='mobile_no' class='col-sm-4 control-label'>Password</label>
    <div class='col-md-4'>
      <input type='password' class='form-control' name='password' value='<?php echo $password;?>' placeholder='Password'>
    </div>
  </div>
  
  <div class='form-group'>
    <div class=' col-sm-4 control label'>
      <button type='submit' name='save' class='btn btn-primary'>Save</button>
    </div>
  </div>
</form>
            </div>


   

   

<?php include('includes/footer.php');?>