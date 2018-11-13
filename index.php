<?php include("includes/header.php"); ?>
   
<body>

    <!-- Navigation -->
    <?php include("includes/navigation.php"); 
    
    ?>    
    
    
   
<!-- Full Page Image Background Carousel Header -->
    <header id="myCarousel" class="carousel slide ">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
               
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url(uploads/ce1.jpg");></div>
                <!-- /header-text -->
                <div class="carousel-caption">
                <h2><strong>Course Evaluation</strong>
                 <div class="header-text hidden-xs">
                        
                    </div>                  
                </div>
            </div>
            
            <div class="item">
              
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('uploads/ce2.jpg');"></div>
                <div class="carousel-caption">
                    <h2><strong>Course Evaluation</strong>
                </div>
            </div>
            <div class="item">
               
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('uploads/ce3.jpg');"></div>
                <div class="carousel-caption">
                  <h2><strong>Course Evaluation</strong>
                   <!-- <h2>LETS EDUCATE OUR CHILDREN</h2>-->
                </div>
            </div>
            <div class="item">
               
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('uploads/ce4.jpg');"></div>
                <div class="carousel-caption">
                  <h2><strong>Course Evaluation</strong>
                   <!-- <h2>LETS EDUCATE OUR CHILDREN</h2>-->
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>

    </header>
    <div class='col-md-3'>
      <div class='row'
   <div class='container'>
     <div class='well-header'></div>

                      
    </div>  
</div>
    </body>
     
   

    <!-- Page Content -->
    <?php include("includes/footer.php");?>
   
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>


    


