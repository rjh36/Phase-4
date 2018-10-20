<?php include('server.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Home page</h2>
        </div>
        <div class="content">
            <?php if(isset($_SESSION['success'])): ?>
            <div class="error success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
            <?php endif ?>
            
            <?php if (isset($_SESSION["username"])): ?>
                <p>
                    Welcome to Cyber Security training 2.0 <strong><?php echo $_SESSION['username'] ?></strong>! 
                    This course has four modules: 
                    Phishing and Social Engineering, 
                    Patches and Antivirus, 
                    Password Strength,
                    and Public Wi-Fi Security.
                    Feel free to take them in any order before the final exam!
                </p>
            <?php else: ?>
                <p>
                    Welcome to Cyber Security training 2.0! 
                    You need to create an account and login before using the system.
                </p>
            <?php endif ?>
        </div>
        <div class="sidebar">
            <?php if (isset($_SESSION["username"])): ?>
                <a href="index.php?logout='l'" style="color: red;">Logout</a>
                <a href="#">Phishing and Social Engineering</a>
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
