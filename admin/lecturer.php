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
                           Lecturer
                        </h1>
                        
                    </div>
                </div>
                <table class='table table-bordered  table-hover'>
                             <thead>
                                 <tr>
                                     <th>Names</th>                                     
                                     <th>Staff ID</th>
                                     <th>Email</th>                                  
                                     <th>TelNo</th>
									 <th>Delete<th>
                                     
                                     
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                                                                          
                                 
  $query=query("SELECT*FROM lecturers WHERE Role!='admin' ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
									$staff_id=$row['staff_id'];
                                    $email = $row['email']; 
                                    $lecturerid=$row['staff_id'];
                                    $tel_no=$row['tel_no'];
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";        echo "<td>{$staff_id}</td>";
                                  
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$tel_no}</td>";
									echo "<td><a href = 'lecturer.php?delete={$staff_id} '>Delete </td>";
                                                                       
                                }                               ?>
                                  <?php
                                    if(isset($_GET['delete']))
                                    {
                                     $the_staff_id=$_GET['delete'];
                                     $query="DELETE FROM lecturers WHERE staff_id={$the_staff_id}";
                                     $delete_query=mysqli_query($connection,$query);
                                    header('Location: lecturer.php');
                                    }
                                   ?>
                                   
                                  
                             </tbody>
                         </table> 
                    
            </div>
        </div>

        
        
        <?php include('includes/footer.php');?>