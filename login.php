<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manager Login page for Ecosolutions">
    <meta name="author" content="Sreetoma Deb Roy, WWW(Worldwide Women)">
    <title>Manger Login Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php include 'header.inc'; ?>
<?php
    session_start();

    require_once('settings.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $username = trim($_POST['username']);
        $password = trim($_POST['password']);

        // Check if username and password match a record in the users table 
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($query);
        $user = $result->fetch_assoc();

        if ($user) {
            // Store username in session and redirect to manage page 
            header("Location: manage.php");
            exit();
        } else {
            echo "<p>Incorrect username or password.</p>";
        }
    }
?>
    <h1>HR Manager Login</h1>

    <form action="login.php" method="post">
        <p>
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </p>
        <p>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </p>
        <input type="submit" value="Login">
    </form>


<?php include 'footer.inc'; ?>

</body>
</html>