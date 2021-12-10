<?php

global $id;

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $_SESSION['id'] = $id;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
  <form method='POST' action='../Functions/update.php' enctype="multipart/form-data" onsubmit="return validateForm(event);">
                <?php
                    if(isset($_SESSION["errors"])){
                        $errors = $_SESSION["errors"];
                        // loop through errors and display them
                        foreach($errors as $error){
                            ?>
                                <small style="color: red"><?= $error."<br>"; ?></small>
                            <?php
                        }
                    }
                    // destroy session after displaying errors
                    $_SESSION["errors"] = null;
                ?>
                    <div class="mb-3">
                        <input type="text" id="fname" name='fname' placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="lname" name='lname' placeholder="Last Name">
                    </div>
                    <div class="mb-3">
                        <input type="text" id="email" name='email' placeholder="Email">
                    </div>
                    <div class = "mb-3">
                        <input type="text" id="telno" name='tel_no' placeholder="Telephone">
                    </div>
                    <br>
                    <div class="mb-3">
                        <span class="datepicker-toggle">
                        <span class="datepicker-toggle-button"></span>
                            <label for="dob">Dob:</label>
                            <input type="date" class="datepicker-input" name="dob">
                        </span>
                    </div>
                    <br>
                    <div class="mb-3">
                        <select class = "subject" name='medHistory'>
                            <option value="">Medical History</option>
                            <option value="yes">Yes, I have a Medical History</option>
                            <option value="no">No, I do not have a Medical History</option>
                         </select>
                    </div>
                    <div class="mb-3">
                         <select class = "subject" name='appt_time'>
                            <option value="">Appointment Time</option>
                            <option value="1pm">1pm</option>
                            <option value="2pm">2pm</option>
                            <option value="3pm">3pm</option>
                            <option value="4pm">4pm</option>
                            <option value="5pm">5pm</option>
                         </select>
                    </div>
                         <br>
                         <label for="dob">Appointment Date:</label>
                         <input type="date" id="apptdate" name='appt_date'  placeholder="Appointment Date"> <br>
                    <button type="submit" value="submit" name="submit">Update</button>
                </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>