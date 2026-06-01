<?php
    session_start();
    
    require_once('settings.php');
    
    $loginError = "";
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = $conn->real_escape_string(trim($_POST['username']));
    $password = $conn->real_escape_string(trim($_POST['password']));


    $query  = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);
    $user   = $result->fetch_assoc();
    
    if ($user) {
        $_SESSION['username'] = $user['username'];
        header("Location: manage.php");
        exit();
    } else {
        $loginError = "Incorrect username or password.";
    }

    }
?>
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

   <h3>Manager Login</h3>
    <form action="login.php" method="post">

        <?php if ($loginError !== ""): ?>
            <p class="error-msg"><?php echo htmlspecialchars($loginError); ?></p>
        <?php endif; ?> 
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