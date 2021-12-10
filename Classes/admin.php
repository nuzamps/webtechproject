<?php
//connect to database class
require_once (dirname(__FILE__)).'/../Settings/database_connection.php';

class admin extends db_connection{

    // verify user email
    public function verify_username($username){
        $sql = "SELECT * FROM `Hostelmanager` WHERE `hm_email`='$email'";
        return $this->db_query($sql);
    }

    public function verify_password($email) {
        $sql = "SELECT `password` FROM `Hostelmanager` WHERE `hm_email` = '$email'";
        return $this->db_query($sql);
    }

    public function getAppointments() {
        $sql = "SELECT * FROM `Appointment`";
        return $this->db_query($sql);
    }

    public function update_appointment($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date, $id){
        $sql= "UPDATE `Appointment` SET `fname`='$fname', `lname`='$lname', `email`='$email', `tel_no`='$tel_no', `dob`='$dob', `medHistory`='$medHistory', `appt_time`='$appt_time', `appt_date`='$appt_date' WHERE `appt_id` = '$id'";

        return $this->db_query($sql);
    }

    public function delete($id) {
        $sql = "DELETE FROM `Appointment` WHERE `appt_id` = '$id'";
        return $this->db_query($sql);
    }


}