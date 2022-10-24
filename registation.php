<?php 
 $name=$_POST['name'];
 $email=$_POST['email'];
 $user_name=$_POST['user_name'];
 $password=$_POST['password'];
 $Confirm_password=$_POST['Confirm_password'];
 
 
 
 session_start();

 if($user_name == "" || $password == ""){
    header('location: log_in.php?err=null');
}else if($_SESSION['user']['user_name']== $username && $_SESSION['user']['password'] == $password){
    $_SESSION['status'] = true;
    header('location: log_in.html');
}else{
    header('location: registration.html?err=invalid');
}


?>