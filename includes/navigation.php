<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Online Course Evaluation System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                
                   
                <li>
                        <a href='login.php'>Login</a>
                    </li>
                           
                
                    
                    <?php 
                    if(isset($_SESSION['admin_email'] ))
                    {
                      /*echo "<li>
                        <a href='admin/index.php'>Admin</a>
                    </li> "*/;
                    }
                    
                    ?>
                    <?php 
                    if(isset($_SESSION['staff_id'] ))
                    {
                      echo "<li>
                        <a href='lecturer/profile.php'></a>
                    </li> ";
                    }
                    
                    ?>
                  <?php
                   if(isset($_SESSION['student_email']))
                    {
                        $query=query("SELECT*FROM students WHERE semail='{$_SESSION['student_email']}'");
                       confirm($query);
                   
                       
                
      /* $msg="SELECT * FROM notifications WHERE semail='{$_SESSION['student_email']}' AND reading_status='unread'";
                       $result_msg=mysqli_query($connection,$msg);
                       $rowcount=mysqli_num_rows($result_msg);*/
                       
                       
                   echo "
                   <li>
                            <a href='./admin/includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                         
                    </li>
                   <li class='dropdown'>
                        <a href='profile.php' class='dropdown-toggle' data-toggle='dropdown'><i class='fa fa-user'></i>{$_SESSION['student_firstname']} {$_SESSION['student_lastname']}</a>
                        <ul class='dropdown-menu'>
                         <li>
                            <a href='./request.php?id={$_SESSION['student_email']}'><i class='fa fa-fw fa-user'></i>Book Appointment</a>
                            
                        </li> 
                        
                        </ul>
                    </li>
                    <li>
 
                    
                    </li>
                      
                    ";
                   }
                    ?>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>