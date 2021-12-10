<?php

//connect to controller
require_once (dirname(__FILE__)).'/../Controller/user_controller.php';

$errors = array();

if (isset($_POST['reset'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['password2'];

    if ($password != $confirm_password) {
        array_push($errors, "Passwords entered do not match");

    }

    $verify_email = verify_email_fxn($email);
    if ($verify_email) {
        array_push($errors, "Signup to proceed!");
        header('location: ./signup.php');
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $update = update_password($email, $password);

        if($update) {
            echo "password updated successfully";
            header('location: ../userlogin.php');
        } else {
            echo "Failed to update password";
            header('location: ../signup.php');
        }
    }

}


?>