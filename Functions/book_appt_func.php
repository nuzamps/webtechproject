<?php 

require_once (dirname(__FILE__)).'/../Controller/appointment_controller.php';

$errors = array();

// $fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date
if (isset($_POST['submit'])) {

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $tel_no = $_POST['tel_no'];
    $dob = $_POST['dob'];
    $medHistory = $_POST['medHistory'];
    $appt_time = $_POST['appt_time'];
    $appt_date = $_POST['appt_date'];


    if(empty($fname)){
        array_push($errors, "first name is required");
    }

    if(empty($lname)){
        array_push($errors, "last name is required");
    }

    if(empty($email)){
        array_push($errors, "email is required");
    }

    if(empty($tel_no)){
        array_push($errors, "telephone number is required");
    }

    if(empty($dob)) {
        array_push($errors, "date of birth is required");
    }

    if(empty($medHistory)){
        array_push($errors, "medical history is required");
    }

    if(empty($appt_time)){
        array_push($errors, "appointment time is required");
    }

    if(empty($appt_date)){
        array_push($errors, "appointment date is required");
    }

    if (count($errors) == 0) {

        $apptbook=BookAppointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date);
        if ($apptbook) {
            echo "Appointment Successfully Booked";
            header('location: ../Views/booking_success.html');
        } else {
            // echo "Booking Failed";
        }
        
    } 
    else { 
        session_start();
        // store the errors inside session
        $_SESSION["errors"] = $errors;
        header("location: ../index.php");  

    }


}


?>