<?php
// start session so that the errors can be available in this file
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>
  <body class = "body" id = "body">
   
  </body>
    <div class="background">
    </div>
    <form method='POST' action='Functions/register_user_func.php' enctype="multipart/form-data" onsubmit="return validateForm(event);">
      <?php
                  if(isset($_SESSION["errors"])){
                      $errors = $_SESSION["errors"];
                      // displaying errors by looping
                      foreach($errors as $error){
                          ?>
                              <small style="color: red"><?= $error."<br>"; ?></small>
                          <?php
                      }
                  }
                  // destroy session after displaying errors
                  $_SESSION["errors"] = null;
     ?>
    
        <h3>Sign Up Here</h3>
        <label for="username">Username</label>
        <input type="text" placeholder="Enter Username" id="username" name="username">

        <label for="email">Email</label>
        <input type="text" placeholder="Enter Email" id="email" name="email">

        <label for="password">Password</label>
        <input type="password" placeholder="Enter Password" id="password" name="password">

        <label for="confirmpassword">Confirm Password</label>
        <input type="password" placeholder="Confirm password" id='password2' name='password2'>
        <button type="submit" id="signup" name='signup'>Sign Up</button>
    </form>
</body>
</html>
 