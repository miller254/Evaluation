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
                           REJECTED APPOINTMENTS
                        </h1>
                        
                    </div>
                </div>
                <table class='table table-bordered  table-hover'>
                             <thead>
                                 <tr>
                                     <th>Appointment ID</th>                                    
                                     <th>Doctor ID</th>
                                     <th>Email</th>                                  
                                     <th>Appointment Date</th>
                                     
                                     
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                 //Select rejected appointments                                                            
                                 
  $query=query("SELECT*FROM appointments WHERE status='rejected' ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $appointmentid = $row['appointment_id'];
                                    $doctorid= $row['doctor_id'];
                                    $email = $row['pemail'];                                    
                                    $date=$row['option1'];
                                    
                                   
                                    
                                    echo "<tr>";                                                                      
                                    echo "<td>{$appointmentid}</td>";
                                    echo "<td>{$doctorid}</td>";
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$date}</td>"; 
                                   
                                }
                                ?>
                                   
                                  
                             </tbody>
                         </table> 
                    
            </div>
        </div>

        
        
        <?php include('includes/footer.php');?>