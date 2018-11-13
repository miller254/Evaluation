<?php include('includes/header.php'); ?>
              <body>
            
<!--Navigation-->
                   <?php include('includes/navigation.php'); ?>
                   <div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
            <h1 class='text-center login-title' >Register Lecturer</h1>
            <div class='account-wall' >
                  
               
                <?php add_lecturer();?>
                
                    <div class='container'>
       
       <div class='col-sm-6'>
          <form action='' method='post' enctype='multipart/form-data'>
              <div class='form-group'>
              <label for='firstname' color='#FFFFFF'>Firstname</label>
               <input type='text'name='fname' class='form-control'>
              </div>
               <div class='form-group'>
                 <label for='lastname'>Lastname</label>

               <input type='text' name='lname' class='form-control'>
              </div>
              
              <div class='form-group'>
                 <label for='Email'>Email</label>

               <input type='text' name='email' class='form-control'>
              </div>                                      
                 <div class='form-group'>
                 <label for='Designation'>Role:</label>
                   <select class='form-control' id='sel1' name='role' value='select role'>
                            <option>Admin</option>
                            <option>Lecturer</option>
                            
                    </select>
                    </div>                  
                           
               
              <div class='form-group'>
                 <label for='password'>Password</label>

               <input type='password' name='password' class='form-control'>
              </div>
              <div class='form-group'>
                 <label for='Telephone number'>Telephone number</label>

               <input type='text' name='tel_no' class='form-control'>
              </div>   
                         
              <div class='form-group'>
                 <label for='photo'>Photo</label>

               <input type='file' name='file' class='form-control'>
              </div>
              <input class='btn btn-primary' type='submit' name='register' value='submit'>
          </form>
           
           
       </div>
       
       
   </div>
                <label class='checkbox pull-left'>
                    
                </label>
                
                
                
            </div>
            
        </div>
    </div>
</div>
                   
              </body>
                
              