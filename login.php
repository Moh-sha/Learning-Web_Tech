<?php 
    session_start();
    if(!isset($_SESSION['status'])){
        header('location: login.php?err=bad_request');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in </title>
</head>
<body>
             
 
<div class="donor-info make-it-center">
    <h2>Login</h2>
    <form >  
      Username: <input type="text" name="username" value="">
      <span class="error"></span>
      <br><br>
      Password: <input type="password" name="password" value="s">
      <span class="error"></span>
      <br><br>
      <input type="checkbox" id="rmbm" name="rmbm" value="True">
      <label for="rmbm"> Remember Me</label><br><br>
    
    <input type="submit" name="submit" value="Submit">  
    <span>Forgot Password?</span>
    
    </form>
    
    </div>
    
    


</body>
</html>