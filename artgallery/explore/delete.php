<?php

    // sql to delete a record
$sql = "DELETE FROM `registration` WHERE `id`";

if(isset($_SESSION['logged-in']) && $_SESSION['user_type'] == 'admin'){
    $id->delete($_GET['id']);
    header('location: ../explore/explore1.php');
}
?>