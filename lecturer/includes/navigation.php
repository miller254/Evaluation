<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
        <div class='container'>
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='../index.php'>Course Evaluation System</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
                <ul class='nav navbar-nav navbar-right'>
               
                <li>
                        <a href='../login.php'>Login</a>
                    </li>                         
                
                    
                    
                  <?php
                   if(isset($_SESSION['lecturer_email']))
                    {
                        $query=query("SELECT*FROM lecturers WHERE staff_id='{$_SESSION['staff_id']}'");
                       confirm($query);
                   
                      
                       
                       
                   echo "
                   <li>
                            <a href='../index.php'><i class='fa fa-fw fa-power-off'></i> Log Out</a>
                        </li>
                   <li>
                        <a href='profile.php' ><i class='fa fa-user'></i>Lecturer  {$_SESSION['lecturer_lastname']}</a>
                        <ul class='dropdown-menu'>
                         
                        
                        </ul>
                    </li>
                    
                      <li>
                            <a href='./profile.php?id={$_SESSION['staff_id']}'><i class='fa fa-fw fa-user'></i> Profile</a>
                        </li> 
                    ";
                   }
                    ?>
                     <div class='collapse navbar-collapse navbar-ex1-collapse'>
                <ul class='nav navbar-nav side-nav'>
                    <li class='active'>
                        <a href='../index.php'><i class='fa fa-fw fa-dashboard'></i> Home</a>
                    </li>
                    <?php echo"
                  <li>
 
                    
                    </li>";?>
                    
                   
                </ul>
            </div>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>