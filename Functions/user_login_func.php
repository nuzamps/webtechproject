<?php

//connect to controller
require_once (dirname(__FILE__)).'/../Controller/user_controller.php';

$errors = array();

if (isset($_POST['signin'])) {
    $username= $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($username)){
        array_push($errors, "username is required");
    }

    if(empty($email)){
        array_push($errors, "email is required");
    }

    if(empty($password)){
        array_push($errors, "password is required");
    }

    $verify_email = verify_email_fxn($email);
    if ($verify_email) {
        array_push($errors, 'email not found');
    }

     // validate email with regex
    $regex1 = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
     // set an error if not a valid email address
    if(!preg_match($regex1, $email)){
         array_push($errors, "enter a valid email address");
    }

    $verify_password = verify_password($email);
    if ($verify_password != md5($password)) {
        array_push($errors, "password is incorrect");
    }


    if (count($errors) == 0 ) {

        echo "success";

        header("location: ../index.php"); 


    }else{

        echo "failed";

        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        header("location: ../userlogin.php");
    }
}

?>