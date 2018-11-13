<?php
function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}

function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = "";


    }


}


function display_message() {

    if(isset($_SESSION['message'])) {

        echo $_SESSION['message'];
        unset($_SESSION['message']);

    }



}




function escape_string($string){

global $connection;

return mysqli_real_escape_string($connection, $string);


}



function fetch_array($result){

return mysqli_fetch_array($result);

}


function redirect($location){

return header("Location: $location ");


}

function confirm($result)
{
  global $connection;
  if(!$result)
  {
       die('QUERY FAILED' . mysqli_error($connection));
  }
}

function encrypt_decrypt($action, $string) {
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $secret_key = 'This is my secret key';
    $secret_iv = 'This is my secret iv';
    // hash
    $key = hash('sha256', $secret_key);
    
    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);
    if ( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    } else if( $action == 'decrypt' ) {
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }
    return $output;
}
function add_course()
{ 
     global $connection;
  if(isset($_POST['register']))
                        {
					
                        $course_id=$_POST['Course_ID'];
                        $course_name=$_POST['Course_name']; 
						
						 if($course_id ==""  ||$course_name =="" )
                        {
                        echo 
                            ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('ID and name should not be empty')
    </SCRIPT>");
	
						}
						else
						{
					    $query ="INSERT INTO course (Course_ID,course_name) ";
				 $query.="VALUES ('{$course_id}','{$course_name}')";
				 
				  $register=mysqli_query($connection,$query);
                        }
						}
}

function add_lecturer()
{
    
     global $connection;
  if(isset($_POST['register']))
                        {
						//$staff_id=$_POST['staffid'];
                        $first_name=$_POST['fname'];
                        $last_name=$_POST['lname'];    
                        $email=$_POST['email'];
						$decpassword =$_POST['password'];
                        $password = encrypt_decrypt('encrypt', $decpassword);
                        $tel_no=$_POST['tel_no'];
						$role=$_POST['role'];
                        $lec_image=escape_string($_FILES['file']['name']);
                        $lec_image_loc=$_FILES['file']['tmp_name'];

 
                        
                        if($last_name ==""  ||$email =="" )
                        {
                        echo 
                            ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('name and email should not be empty')
    </SCRIPT>");
                        }
                        else
                        {
                        move_uploaded_file($lec_image_loc, "../uploads/{$lec_image}");
                            
                        $query ="INSERT INTO lecturers(fname,lname,email,password,tel_no,image) ";
        $query.="VALUES ('{$first_name}','{$last_name}','{$email}','{$password}','{$tel_no}','{$doc_image}')";
                            
                        $register=mysqli_query($connection,$query);
                        }
      
        if($appointment){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    </SCRIPT>");
        
}
  
                      else if(!$register)
                        {
                           echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('NO REGISTRATION DONE')
    </SCRIPT>");
                        }
                        redirect("index.php");
                        }
}
    function add_student()
{
    
     global $connection;
  if(isset($_POST['register']))
                        {
                        $first_name=$_POST['fname'];
                        $last_name=$_POST['lname'];    
                        $email=$_POST['student_email'];                       
                        $decpassword = $_POST['password'];
                        $password = encrypt_decrypt('encrypt', $decpassword);
                        $tel_no=$_POST['tel_no'];                       
                        
                        if($last_name ==""  ||$email =="" )
                        {
                        echo
                            ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('name and email should not be empty')
    </SCRIPT>");
                        }
                        else
                        {
                         $query ="INSERT INTO students(fname,lname,semail,password,tel_no)";
        $query.="VALUES ('$first_name','$last_name','$email','$password','$tel_no')";
                        $register=mysqli_query($connection,$query);
                        
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
      
                        redirect("index.php");
                        }
    
  }
    
}

    function update_lec()
{
    if(isset($_POST['save']))
    {   global $connection;
        $staff_id=$_GET['id'];
        $email=$_POST['email'];
        $decpassword =$_POST['password'];
        $password=encrypt_decrypt('encrypt', $decpassword);
        $tel_no=$_POST['tel_no'];       
        
        
        $query="UPDATE lecturers ";
        $query.="SET email='{$email}', ";
        $query.="password='{$password}', ";
        $query.="tel_no='{$tel_no}' ";      
        $query.="WHERE staff_id={$staff_id}";
        
        
        $update_lec=mysqli_query($connection,$query);
        confirm($update_lec);
//        redirect('profile.php');
        
        
        
        
    }
}

function login_user(){

if(isset($_POST['login'])){

$user_email = $_POST['username'];
$decpassword = $_POST['password'];
$user_password = encrypt_decrypt('encrypt', $decpassword);


    
    
$lecquery=query("SELECT* FROM lecturers WHERE email='{$user_email}' AND password='{$user_password}'");
confirm($lecquery);
while($row=fetch_array($lecquery))
{

$staff_id=$row['staff_id'];
$staff_email = $row['email'];
$password = $row['password'];
$fname = $row['fname'];
$lname = $row['lname'];
$role = $row['role'];
    

}
$studquery=query("SELECT* FROM students WHERE semail='{$user_email}' AND password='{$user_password}'");
confirm($studquery);
while($row=fetch_array($studquery))
{

$semail = $row['semail'];
$password = $row['password'];
$fname = $row['fname'];
$lname = $row['lname'];
$role = $row['Role'];
    

}

    
if(mysqli_num_rows($lecquery) == 0  && mysqli_num_rows($studquery)==0  ) {

set_message("Your Password or Username are wrong");
redirect("login.php");


}
else 
    if($user_email==$staff_email && $role=='admin') 
{

 $_SESSION['admin_firstname'] = $fname;
 $_SESSION['admin_lastname']  = $lname;
 $_SESSION['admin_email']    = $staff_email;


redirect("admin/");
}
else if($user_email==$semail && $role=='student')
{

 $_SESSION['student_firstname'] = $fname;
 $_SESSION['student_lastname']  = $lname;
 $_SESSION['student_email']    = $semail;


redirect("./");
 }
    else if($user_email==$staff_email && $role=='lecturers')
{

 $_SESSION['lecturer_firstname'] = $fname;
 $_SESSION['lecturer_lastname']  = $lname;
 $_SESSION['staff_id'] = $staff_id;
 $_SESSION['lecturer_email']     = $staff_email;

redirect("lecturer/profile.php");

    
}
}
}

?>