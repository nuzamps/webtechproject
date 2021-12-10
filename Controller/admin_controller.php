<?php
//connect to database class
require_once (dirname(__FILE__)).'/../Classes/admin.php';


function verify_email_fxn($email){
    // create a new instance of user object
    $admin = new admin;

    // run the query
    $run_register_user = $admin->verify_email($email);

    // if successful
    if($run_register_user){
        // fetch data from database
        $admin_email = $admin->db_fetch();
        if(empty($admin_email)){
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

    $admin = new admin;

    $run_register_user = $admin->verify_password($email);
    if ($run_register_user) {

        $admin_password = $admin->db_fetch();
        return $admin_password['password'];
    } else {
        return "";
    }
}

function getAppointments() {
    $admin = new admin;

    $run_register_user = $admin->getAppointments();
    if ($run_register_user) {
        $books = array();
        while ($record = $admin->db_fetch()) {
            $books[] = $record;
        }
        return $books;
    } else {
        return false;
    }
}

function update_appointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date, $id) {
    $admin = new admin;

    $run_register_user = $admin->update_appointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date, $id);

    if ($run_register_user) {
        return $run_register_user;
    } else {
        return false;
    }
}

function delete($id) {

    $admin = new admin;

    $del = $admin->delete($id);

    if($del) {
        return $del;
    } else {
        return false;
    }

}
