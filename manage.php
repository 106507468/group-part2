    <?php
        session_start();
       // Redirect to login if not logged in
        if (!isset($_SESSION['username'])) {
            header("Location: login.php");
            exit();
        }
        
        // Logout
        if (isset($_GET['logout'])) {
            session_unset();
            session_destroy();
            header("Location: login.php");
            exit();
        }
        
        require_once('settings.php');
    ?>    

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





    <?php include 'footer.inc'; ?>

</body>
</html>