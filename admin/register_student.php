<?php include('includes/header.php'); ?>
              <body>
            
<!--Navigation-->
                   <?php include('includes/navigation.php'); ?>
                   <div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
            <h1 class='text-center login-title' >Register Student</h1>
            <div class='account-wall' >
                  
                <form class='form-signin' method='post' action=''>
                <?php add_student();?>
                
                    <div class='container'>
       
       <div class='col-sm-6'>
          <form action='registration.php'method='POST'>
              <div class='form-group'>
              <label for='firstname' color='#FFFFFF'>firstname</label>
               <input type='text'name='fname' class='form-control'>
              </div>
               <div class='form-group'>
                 <label for='lastname'>lastname</label>

               <input type='text' name='lname' class='form-control'>
              </div>                         
              
              <div class='form-group'>
                 <label for='Email'>Email</label>

               <input type='text' name='student_email' class='form-control'>
              </div>                           
               
              <div class='form-group'>
                 <label for='password'>password</label>

               <input type='password' name='password' class='form-control'>
              </div>
              <div class='form-group'>
                 <label for='Telephone number'>Telephone number</label>

               <input type='number' name='tel_no' class='form-control'>
              </div>         
              
              <input class='btn btn-primary' type='submit' name='register' value='submit'>
          </form>
           
           
       </div>
       
       
   </div>
                <label class='checkbox pull-left'>
                    
                </label>
                
                </form>
                
            </div>
            
        </div>
    </div>
</div>
                   
              </body>
                
              