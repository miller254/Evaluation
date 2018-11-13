
<?php include('includes/header.php');?>
<?php
if(!isset($_SESSION['admin_email']))
{
    redirect('../index.php');
}


?>
<body>

    <div id='wrapper'>

        <!-- Navigation -->
        <?php include('includes/navigation.php');?>
       

        <div id='page-wrapper'>

            <div class='container-fluid'>

                <!-- Page Heading -->
                <div class='row'>
                    <div class='col-lg-12'>
                        <h1 class='page-header'>
                          
                           
                            Welcome <small> <?php echo  $_SESSION['admin_firstname'];echo ' '; echo 
 $_SESSION['admin_lastname'] ;?></small>
                        </h1>
                        <ol class='breadcrumb'>
                            <li class='active'>
                                <i class='fa fa-dashboard'></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class='row'>
                    
                <!-- /.row -->

                <div class='row'>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-danger'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='fa fa-user fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'><?php  ?></div>
                                        <div>View registered students</div>
                                    </div>
                                </div>
                            </div>
                            <a href=''>
                                <div class='panel-footer'><a href=''>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span></a>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-green'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='glyphicon glyphicon-ok-sign fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'><?php ?></div>
                                        <div>View enrolled courses</div>
                                    </div>
                                </div>
                            </div>
                            <a href=''>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class='col-lg-3 col-md-6'>
                        <div class='panel panel-yellow'>
                            <div class='panel-heading'>
                                <div class='row'>
                                    <div class='col-xs-3'>
                                        <i class='glyphicon glyphicon-remove-sign fa-5x'></i>
                                    </div>
                                    <div class='col-xs-9 text-right'>
                                        <div class='huge'><?php ?></div>
                                        <div>View reports</div>
                                    </div>
                                </div>
                            </div>
                            <a href= ''>
                                <div class='panel-footer'>
                                    <span class='pull-left'>View Details</span>
                                    <span class='pull-right'><i class='fa fa-arrow-circle-right'></i></span>
                                    <div class='clearfix'></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                    
                   
                </div>
                <!-- /.row -->

         
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

 <?php include('includes/footer.php');?>