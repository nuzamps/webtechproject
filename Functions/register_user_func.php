<?php
//connect to controller
require_once (dirname(__FILE__)).'/../Controller/user_controller.php';

// keep track of errors
$errors = array();
// check if the button has been clicked
if(isset($_POST['signup'])){
    // grab form data
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["password2"];

    // validate data
    // check if fields are empty
    if(empty($username)){
        array_push($errors, "username is required");
    }
    if(empty($email)){
        array_push($errors, "email is required");
    }
    if(empty($password)){
        array_push($errors, "password is required");
    }
    if(empty($confirm_password)){
        array_push($errors, "password 2 is required");
    }

    // check if email already exists
    $verify_email = verify_email_fxn($email);
    if(!$verify_email){
        array_push($errors, "email already exists");
    }

    // check if fields are of appropriate length
    if(strlen($username) > 100){
        array_push($errors, "username must be shorter than 100 characters");
    }
    if(strlen($email) > 100){
        array_push($errors, "email must be shorter than 100 characters");
    }

    //validate username with regex
    // $regex= "^[A-Za-z][A-Za-z0-9_]{7,29}$";
    // $regex="/^[A-Za-z .]{3,15}$/";
    // if(!preg_match($regex, $username)){
    //     array_push($errors, "enter a valid username");
    // }

    // validate email with regex
    $regex = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    // set error if not an email
    if(!preg_match($regex, $email)){
        array_push($errors, "enter a valid email");
    }

    //validate password with regex
    if(!empty($password) && $password != "" ){

        if (strlen($password) <= '8') {
            array_push($errors, "Your Password Must Contain At Least 8 Digits !"."<br>");
        }
        if(!preg_match("#[0-9]+#",$password)) {
            array_push($errors, "Your Password Must Contain At Least 1 Number !"."<br>");
        }
        if(!preg_match("#[A-Z]+#",$password)) {
            array_push($errors, "Your Password Must Contain At Least 1 Capital Letter !"."<br>");
        }
        if(!preg_match("#[a-z]+#",$password)) {
            array_push($errors, "Your Password Must Contain At Least 1 Lowercase Letter !"."<br>");
        }
        if(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password)) {
            array_push($errors, "Your Password Must Contain At Least 1 Special Character !"."<br>");
        }
    }


    // check if passwords are the same
    if($password != $confirm_password){
        array_push($errors, "Passwords entered do not match");
    }



    // if form is fine
    if(count($errors) == 0){
        // if upload was a success
        // encrypt password
        $password = md5($password);

        // register the new user
        $register_user = register_new_user($username, $email, $password);

        // check if user is registered
        if($register_user){
            echo "Registration Successful";
            // redirect
            header("location: ../index.php");
            
        }else{
            echo "Failed to register new user";
        }
       
    }else{
        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        header("location: ../signup.php");
    }
    
}