<?php
require_once (dirname(__FILE__)).'/../Controller/admin_controller.php';

if (isset($_POST['submit'])) {

    $id = $_SESSION['id'];

    echo $id;

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tel_no = $_POST['tel_no'];
    $dob = $_POST['dob'];
    $medHistory = $_POST['medHistory'];
    $appt_time = $_POST['appt_time'];
    $appt_date = $_POST['appt_date'];



    $update = update_appointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date, $id);

    if ($update) {
        header('location: ../Views/Adminview.php');
    } else {
        echo "failed";
    }


} else {
    echo 'doesnt run';
}

?>