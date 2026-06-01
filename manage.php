<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manager Dashboard for Ecosolutions">
    <meta name="author" content="Sreetoma Deb Roy, WWW(Worldwide Women)">
    <title>Manager - Manage EOIs</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

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
    ?>    


    <?php include 'footer.inc'; ?>

</body>
</html>