<?php include('includes/header.php'); ?>
              <body>
            
<!--Navigation-->
                   <?php include('includes/navigation.php'); ?>
                   <div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
            <h1 class='text-center login-title' >Register Doctor</h1>
            <div class='account-wall' >
                  
               
                <?php add_doctor();?>
                
                    <div class='container'>
       
       <div class='col-sm-6'>
          <form action='' method='post' enctype='multipart/form-data'>
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

               <input type='text' name='email' class='form-control'>
              </div>                                      
                 <div class='form-group'>
                 <label for='Designation'>Select Designation:</label>
                   <select class='form-control' id='sel1' name='designation' value='select designation'>
                            <option>Audiologist</option>
                            <option>Cardiologist</option>
                            <option>Allergist</option>
                            <option>Dentist</option>
                            <option >Dermatologist </option>
                            <option >ENT Specialist</option>
                            <option >Pediatrician</option>
                            <option >Gynecologist</option>
                    </select>
                    </div>                  
                           
               
              <div class='form-group'>
                 <label for='password'>password</label>

               <input type='password' name='password' class='form-control'>
              </div>
              <div class='form-group'>
                 <label for='Telephone number'>Telephone number</label>

               <input type='text' name='tel_no' class='form-control'>
              </div>              
              <div class='form-group'>
                 <label for='photo'>photo</label>

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
                
              