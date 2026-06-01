<?php include 'header.inc'; ?>
<?php
    session_start();
    // If not logged in, redirect to login page 
    if (!isset($_SESSION['username'])) {
        header("Location: login.php");
        exit();
    }

    //logout by destroying session
    if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
    }   