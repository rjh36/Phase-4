<?php
include('server.php');

// Completes the course
if (isset($_POST['update'])) {
    updateProgressTrue($db, $_SESSION["id"], $_POST['update']);
    header('location: index.php'); //redirect to home page
}