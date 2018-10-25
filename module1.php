<?php include('server.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Module 1 - Phishing</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Phishing and Social Engineering</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <p>
                    Test information here
                </p>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
        <div class="sidebar">
            <?php if (isset($_SESSION["username"])): ?>
                <a><?php echo $_SESSION['username'] ?></a>
                <a href="index.php?logout='l'" style="color: red;">Logout</a>
                <a href="index.php">Home</a>
                <a href="module1.php">Phishing and Social Engineering</a>
                <a href="#">Patches and Antivirus</a>
                <a href="#">Password Strength</a>
                <a href="#">Public Wi-Fi Security</a>
                <a href="#">Take Final Exam</a>
                <a href="getCertificate.php">Get Certificate</a>
            <?php else: ?>
                <a href="register.php">Create Account</a>
                <a href="login.php">Login</a>
            <?php endif ?>
        </div>
    </body>
</html>
