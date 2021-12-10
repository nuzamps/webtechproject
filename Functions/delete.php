<?php

require_once (dirname(__FILE__)).'/../Controller/admin_controller.php';

if ($_GET['id']) {

    $id = $_GET['id'];

    $delete = delete($id);

    if ($delete) {
        echo "success";
        header('location: ../Views/Adminview.php');
    } else {
        echo "failed";
    }
}

?>