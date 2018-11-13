<?php
session_start();
/*if (!isset($session['logged in'])){
	header("Location: login.php");
}*/
include('includes/header.php'); ?>

              <body>
<!--Navigation-->
                   <?php include('includes/navigation.php'); ?>
                   <div class='container'>
    <div class='row'>
        <div class='col-sm-6 col-md-4 col-md-offset-4'>
           
            <h1 class='text-center login-title'>Sign in</h1>
            <div class='account-wall'>
                <img class='profile-img' src='uploads/logo.png'
                    alt=''>
                
                <form class='form-signin' method='post'>
                
                <?php
                    display_message();
                    login_user(); ?>
                <input type='text' class='form-control' placeholder='username'  name='username'>
                <input type='password' class='form-control' name='password' placeholder='Password' required>
                <button class='btn btn-lg btn-primary btn-block' type='submit' name='login'>
                    Sign in</button>
              <a href='self_registration.php'>do not have an account?Click here to register<a/>
                
                </form>
            </div>
            
    </div>
</div>
                   
              </body>
              
              

              