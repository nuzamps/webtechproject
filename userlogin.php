<?php
// start session so that the errors can be available in this file
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
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
    <form method='POST' action='./Functions/user_login_func.php' enctype="multipart/form-data" onsubmit="return validateForm(event);">
      <?php
                    if(isset($_SESSION["errors"])){
                        $errors = $_SESSION["errors"];
                        // loop through errors and display them
                        foreach($errors as $error){
                            ?>
                                <small style="color: red"><?= $error."<br>"; ?></small>
                            <?php
                        }
                    }
                    // destroy session after displaying errors
                    $_SESSION["errors"] = null;
        ?>
    
        <h3>Login Here</h3>
        <h4>Welcome to Tresses&Locks!</h4>
        
        <div class="center">
        <input type="text" placeholder="Email" id="email" name="email">

        <input type="password" placeholder="Password" id="password" name="password">
        </div>

        <div class="right">
            <a href="forgotpassword.php">Forgot Password</a>
        </div>

        <div class="center">
        <button type="submit" id="signin" name='signin'>Sign In</button>
        
        <p>     
          New User? <a href="signup.php">Sign Up</a>
        </p>
        </div>


    </form>
</body>
</html>

