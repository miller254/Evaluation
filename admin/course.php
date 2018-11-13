<?php include('includes/header.php'); ?>
              <body>
            
<!--Navigation-->
                   <?php include('includes/navigation.php'); ?>
                   <div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
            <h1 class='text-center login-title' >Register Course</h1>
            <div class='account-wall' >
                  
               
					<?php add_course();?>
                
                    <div class='container'>
       
       <div class='col-sm-6'>
          <form action='' method='post' enctype='multipart/form-data'>
           
               <div class='form-group'>
                 <label for='courseid'>Course ID</label>

               <input type='text' name='Course_ID' class='form-control'>
              </div>
              
              <div class='form-group'>
                 <label for='Course_name'>Course name</label>

               <input type='text' name='Course_name' class='form-control'>
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
                
              