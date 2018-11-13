<?php include('includes/header.php');?>
<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('includes/navigation.php');?>
        <div id='page-wrapper'>

            <div class='container-fluid'>
              <div class='row'>
                    <div class='col-lg-12'>
                        <h1 class='page-header'>
                           Doctors
                        </h1>
                        
                    </div>
                </div>
                <table class='table table-bordered  table-hover'>
                             <thead>
                                 <tr>
                                     <th>Names</th>                                     
                                     <th>Designation</th>
                                     <th>Email</th>                                  
                                     <th>TelNo</th>
                                     <th>Qualifications</th>
                                     <th>Delete </th>
                                     
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                 //Select All doctors                                                            
                                 
  $query=query("SELECT*FROM doctors WHERE Role!='admin' ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $email = $row['email']; 
                                    $doctorid=$row['doctor_id'];
                                    $tel_no=$row['tel_no'];
                                    $designation = $row['designation'];
                                    $qualifications=$row['qualifications'];
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";                                     
                                    echo "<td>{$designation}</td>";
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$tel_no}</td>";
                                    echo "<td>{$qualifications}</td>"; 
    echo "<td><a href ='doctors.php?delete={$doctorid}'>Delete Doctor</a></td>";
                                                                       
                                }                               ?>
                                  <?php
                                    if(isset($_GET['delete']))
                                    {
                                     $the_doctor_id=$_GET['delete'];
                                     $query="DELETE FROM doctors WHERE doctor_id={$the_doctor_id}";
                                     $delete_query=mysqli_query($connection,$query);
                                    header('Location: doctors.php');
                                    }
                                   ?>
                                   
                                  
                             </tbody>
                         </table> 
                    
            </div>
        </div>

        
        
        <?php include('includes/footer.php');?>