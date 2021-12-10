<?php
//connect to database class
session_start();
include_once (dirname(__FILE__)).'/../Controller/admin_controller.php';
include_once (dirname(__FILE__)).'/../Settings/database_connection.php';

// delete task
if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	$delete = deleteBooking($id);
    if ($delete) {
        header('location: manager.php');
    } else {
        echo "delete failed";
    }
	
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

    <title>Admin</title>
  </head>
  <body>
    <h1 class="text-center">Admin Dashboard</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <div class="row">
        <h3 class="mt-5">Your Bookings</h3>
        <div>
            <table class="table table-hover">
                <thead class="table-dark">
                    <tr>
                        <th scope = "col">First Name</th>
                        <th scope = "col">Last Name</th>
                        <th scope = "col">Email</th>
                        <th scope = "col">Telephone Number</th>
                        <th scope = "col">date of birth</th>
                        <th scope = "col">Medical Hsitory</th>
						<th scope = "col">Appointment Time</th>
						<th scope = "col">Appointment Date</th>
						<th scope = "col">Update</th>
                        <th scope = "col">Delete</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                    
                    $posts = getAppointments();
                    foreach ($posts as $key => $row) { ?>


                        <tr scope="row">
                            <td class="task"> <?php echo $row['fname']; ?> </td>
                            <td class="task"> <?php echo $row['lname']; ?> </td>
                            <td class="task"> <?php echo $row['email']; ?> </td>
                            <td class="task"> <?php echo $row['tel_no']; ?> </td>
                            <td class="task"> <?php echo $row['dob']; ?> </td>
							<td class="task"> <?php echo $row['medHistory']; ?> </td>
							<td class="task"> <?php echo $row['appt_time']; ?> </td>
                            <td class="task"> <?php echo $row['appt_date']; ?> </td>
							<td class="update"> 
                            	<button type="button" class="btn btn-outline-danger"><a style="text-decoration:none;" href="update_form.php?id=<?php echo $row['appt_id'] ?>">Update</a> </button>
                            </td>
                            <td class="delete"> 
                            	<button type="button" class="btn btn-outline-danger"><a style="text-decoration:none;" href="../Functions/delete.php?id=<?php echo $row['appt_id'] ?>">Delete</a> </button>
                            </td>
                        </tr>
                    <?php } ?>	
                </tbody>
            </table>
        </div>
       
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>