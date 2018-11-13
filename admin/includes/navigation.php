
 
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">System Admin</a>
                 <a class="navbar-brand" href="../index.php">HOME</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
              
               <li>
                            <a href='./admin/includes/logout.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo  $_SESSION['admin_firstname']; echo " "; echo 
 $_SESSION['admin_lastname'] ;?><b class="caret"></b></a>                    
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="lecturer.php"><i class="fa fa-fw fa-user"></i>Lectures</a>
                    </li>
                    <li>
                        <a href="students.php"><i class="fa fa-fw fa-user"></i> Students</a>
                    </li>
                    <li>
                        <a href="register_lecturer.php"><i class="fa fa-fw fa-user"></i>Lecturer Registration</a>
                    </li>
                    <li>
                        <a href="register_student.php"><i class="fa fa-fw fa-user"></i>Student Registration</a>
                    </li>
					 <li>
                        <a href="course.php"><i class="fa fa-fw fa-user"></i> Register courses</a>
                    </li>
                                                            
                    <li>
                        <a href="evaluation_form.php"><i class="fa fa-fw fa-user"></i>Update evaluation forms</a>
                    </li>
                    
                  
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>