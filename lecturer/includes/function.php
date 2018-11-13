<?php
function query($sql) {

global $connection;

return mysqli_query($connection, $sql);


}

function set_message($msg){

if(!empty($msg)) {

$_SESSION['message'] = $msg;

} else {

$msg = '';


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

return header('Location: $location ');


}

function confirm($result)
{
  global $connection;
  if(!$result)
  {
       die('QUERY FAILED' . mysqli_error($connection));
  }
}
function appointment_application(){
    global $connection;
    if(isset($_POST['submit']))
    {
        $email=$_POST['pemail'];
        $option1=$_POST['start_date'];
        $option2=$_POST['start_end'];
        $appointment='INSERT INTO appointments (pemail,option1,option2)';
        $appointment .='VALUES('$email','$option1','$option2')';
        
        $apply=mysqli_query($connection,$appointment);
                        }
   /* if($appointment){
    echo ('<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    </SCRIPT>');
        
}
    else
        echo ('<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Not Successful')
    </SCRIPT>');
}*/
}
                       
    
    

function add_doctor()
{
    
     global $connection;
  if(isset($_POST['register']))
                        {
                        $first_name=$_POST['fname'];
                        $last_name=$_POST['lname'];    
                        $email=$_POST['email'];
                        $designation=$_POST['designation'];
                        $qualifications=$_POST['qualifications'];
                        $password=$_POST['password'];
                        $tel_no=$_POST['tel_no'];
                        $photo=$_POST['image'];
                        
                        if($last_name ==''  ||$email =='' )
                        {
                        echo 'This field(s) should not be empty';
                        }
                        else
                        {
                         $query ='INSERT INTO doctors(fname,lname,email,password,tel_no,designation,qualifications)';
        $query.='VALUES ('$first_name','$last_name','$email','$password','$tel_no','$designation','$qualifications')';
                        $register=mysqli_query($connection,$query);
                        }
        if($appointment){
    echo ('<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Registered')
    </SCRIPT>');
        
}
  
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
                        redirect('index.php');
                        }
}
    function add_patient()
{
    
     global $connection;
  if(isset($_POST['register']))
                        {
                        $first_name=$_POST['fname'];
                        $last_name=$_POST['lname'];    
                        $email=$_POST['email'];                       
                        $password=$_POST['password'];
                        $tel_no=$_POST['tel_no'];                       
                        
                        if($last_name ==''  ||$email =='' )
                        {
                        echo 'This field(s) should not be empty';
                        }
                        else
                        {
                         $query ='INSERT INTO patients(fname,lname,email,password,tel_no)';
        $query.='VALUES ('$first_name','$last_name','$email','$password','$tel_no')';
                        $register=mysqli_query($connection,$query);
                        }
                        if(!$register)
                        {
                            die('QUERY FAILED' . mysqli_error($connection));
                        }
      
                        redirect('index.php');
                        }
    
        
    
}
function get_emp_no()
{
    $query=query('SELECT*FROM employee WHERE emp_role!='admin'' ');
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_emp_at_work_no()
{
    $query=query('SELECT*FROM employee WHERE work_status='At Work' AND emp_role!='admin'');
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_on_leave_no()
{
    $query=query('SELECT*FROM leave_applied WHERE leave_status='approved'');
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_pending_leave_no()
{
    $query=query('SELECT*FROM leave_applied WHERE leave_status='Pending'');
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}
function get_ending_leave_no()
{
    $query=query('SELECT*FROM employee WHERE work_status='Ending Leave' AND emp_role!='admin'');
   
    $num_rows=mysqli_num_rows($query);
    echo $num_rows;
}



function update_employee()
{
    if(isset($_POST['save']))
    {   global $connection;
        $user_emp_no=$_GET['emp_no'];
        $password=$_POST['password'];
        $user_emp_no = $_SESSION['emp_emp_no'];
        
        $query='UPDATE employee SET password='{$password}' WHERE emp_no='$user_emp_no' LIMIT 1';
        
        
        $update_emp=mysqli_query($connection,$query);
        confirm($update_emp);
        redirect('profile.php');
        
        
        
        
    }
}

function login_user(){

if(isset($_POST['login'])){

$user_email = $_POST['email'];
$password = $_POST['password'];
    
    
$query = query('SELECT fname,lname,email,password,Role FROM patients WHERE email = '{$user_email}' AND password='{$password}' UNION SELECT fname,lname,email,password,Role FROM doctors WHERE email='{$user_email}' AND password='{$password}'');
confirm($query);
while($row=fetch_array($query))
{
$email = $row['email'];
$password = $row['password'];
$fname = $row['fname'];
$lname = $row['lname'];
$role = $row['Role'];
    

}
    
if(mysqli_num_rows($query) == 0) {

set_message('Your Password or Username are wrong');
redirect('login.php');


} else if($user_email==$email && $role=='admin') 
{

 $_SESSION['admin_firstname'] = $fname;
 $_SESSION['admin_lastname']  = $lname;
 $_SESSION['admin_email']    = $email;


redirect('admin/');
}
else if($user_email==$email && $role=='patient')
{

 $_SESSION['patient_firstname'] = $fname;
 $_SESSION['patient_lastname']  = $lname;
 $_SESSION['patient_email']    = $email;


redirect('./');
 }
    




    }



}
?>