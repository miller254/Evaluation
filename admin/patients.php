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
                           Patients
                        </h1>
                        
                    </div>
                </div>
                <table class='table table-bordered  table-hover'>
                             <thead>
                                 <tr>
                                     <th>Names</th>       
                                     <th>Email</th>                                  
                                     <th>TelNo</th>
                                     <th>Delete patient</th>
                                     
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                 //Select All doctors                                                            
                                 
  $query=query("SELECT*FROM patients ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $email = $row['pemail'];                                    
                                    $tel_no=$row['tel_no'];
                                    $patientid=$row['patient_id'];
                                   
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";                                  
                                    
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$tel_no}</td>";
                                echo "<td><a href ='patients.php?delete={$patientid}'>Delete Patient</a></td>";
                                                                       
                                }                               ?>
                                  <?php
                                    if(isset($_GET['delete']))
                                    {
                                     $the_patient_id=$_GET['delete'];
                                     $query="DELETE FROM patients WHERE patient_id={$the_patient_id}";
                                     $delete_query=mysqli_query($connection,$query);
                                    header('Location: patients.php');
                                    }
                                   ?>
                                   
                                  
                             </tbody>
                         </table> 
            
            
            </div>
        </div>

        
        
        <?php include('includes/footer.php');?>