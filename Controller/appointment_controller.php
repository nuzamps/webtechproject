<?php
//connect to User class
require_once (dirname(__FILE__)).'/../Classes/appointment.php';

function BookAppointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date){

    // creating new instance of the object
    $appointment = new appointment;

    // run the query
    $book_appt = $appointment->apptbook($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date);

    // check if successful
    if($book_appt){
        return $book_appt;
    }else{
        return false;
    }

}