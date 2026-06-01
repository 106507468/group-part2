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
<main>
    <h2>HR Manager Dashboard</h2>
    <a href="manage.php?logout=1">Logout</a>
 
    <!-- List of all EOIs -->
    <h3>List EOIs</h3>
    <form method="get" action="manage.php">
        <p for="sort_by">Sort by</p>
        <select id="sort_by" name="sort_by">
            <option value="EOInumber">EOI Number</option>
            <option value="job_reference">Job Reference</option>
            <option value="last_name">Last Name</option>
            <option value="first_name">First Name</option>
            <option value="status">Status</option>
        </select>
    </form>
    <!-- Filter by job reference -->
    <h3>Filter by Job Reference</h3>
    <form method="get" action="manage.php">
        <label for="filter_ref">Job Reference</label>
        <input type="text" id="filter_ref" name="filter_ref" placeholder="e.g. RE439">
    </form>
 





    <?php include 'footer.inc'; ?>

</body>
</html>