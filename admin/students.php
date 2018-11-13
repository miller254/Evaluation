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
                           Students
                        </h1>
                        
                    </div>
                </div>
                <table class='table table-bordered  table-hover'>
                             <thead>
                                 <tr>
                                     <th>Names</th>       
                                     <th>Email</th>                                  
                                     <th>TelNo</th>
									 <th>Delete</th>
                                   
                                     
                                 </tr>
                             </thead>
                             <tbody>
                             <?php
                                 //Select All doctors                                                            
                                 
  $query=query("SELECT*FROM students ");
                                confirm($query);
                                while($row=fetch_array($query))
                                {
                                    $fname = $row['fname'];
                                    $lname = $row['lname'];
                                    $email = $row['semail'];                                    
                                    $tel_no=$row['tel_no'];
                                    $student_id=$row['student_id'];
                                   
                                   
                                    
                                    echo "<tr>";
                                    echo "<td>{$fname} {$lname}</td>";                                  
                                    
                                    echo "<td>{$email}</td>";
                                    echo "<td>{$tel_no}</td>";
								    echo "<td><a href = 'students.php?delete={$student_id} '>Delete </td>";;
                                
                                                                       
                                }                               ?>
                                 <?php
                                    if(isset($_GET['delete']))
                                    {
                                     $the_student_id=$_GET['delete'];
                                     $query="DELETE FROM students WHERE student_id={$the_student_id}";
                                     $delete_query=mysqli_query($connection,$query);
                                    header('Location: students.php');
                                    } 
                                   
                                  ?>
                             </tbody>
                         </table> 
            
            
            </div>
        </div>

        
        
        <?php include('includes/footer.php');?>