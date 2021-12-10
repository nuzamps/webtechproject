<?php

require_once (dirname(__FILE__)).'/../Settings/database_connection.php';

class appointment extends db_connection {

    public function apptbook($fname, $lname, $email, $tel_no, $dob, $medHistory, $appt_time, $appt_date) {

        $sql = "INSERT INTO `Appointment` (`fname`, `lname`, `email`,`tel_no`, `dob`, `medHistory`, `appt_time`, `appt_date`) VALUES ('$fname', '$lname',
         '$email', '$tel_no', '$dob', '$medHistory', '$appt_time', '$appt_date')";

        return $this->db_query($sql);
    }

    
}

?>