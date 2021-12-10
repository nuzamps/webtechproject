<?php
//connect to User class
require_once (dirname(__FILE__)).'/../Classes/user.php';

function register_new_user($username, $email, $password){
   // creating new instance of the object
    $user = new user;

    // run the query
    $run_register_user = $user->register($username, $email, $password);

    // check if successful
    if($run_register_user){
        return $run_register_user;
    }else{
        return false;
    }

}function verify_email_fxn($email){
    // create a new instance of user object
    $user = new user;

    // run the query
    $run_register_user = $user->verify_email($email);

    // if successful
    if($run_register_user){
        // fetch data from database
        $user_email = $user->db_fetch();
        if(empty($user_email)){
            // if empty means the email isn't in the database already
            return true;
        }else{
            return false;
        }
    }else{
        return false;
    }
}

function verify_password($email) {

    $user = new user;

    $run_register_user = $user->verify_password($email);
    if ($run_register_user) {

        $user_password = $user->db_fetch();
        return $user_password['password'];
    } else {
        return "";
    }
}

function update_password($email, $password) {

    $user = new user;

    $run_register_user = $user->update_password($email, $password);
        if ($run_register_user) {
            return true;
        } else {
            return false;
        }
    
}
