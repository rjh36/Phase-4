<?php include('server.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Module 1 - Phishing</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src='dropdown.js'></script>
    </head>
    <body onload="dropdown();">
        <div class="header">
            <h2>Password Strength</h2>
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
                <button class="dropbtn"><?php echo $_SESSION['username'] ?>
                        <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="index.php?logout='l'" style="color: red;">Logout</a>
                </div>
                <a href="index.php">Home</a>
                <a href="module1.php">Phishing and Social Engineering</a>
                <a href="module2.php">Patches and Antivirus</a>
                <a href="module3.php">Password Strength</a>
                <a href="module4.php">Public Wi-Fi Security</a>
                <a href="finalexam.php">Take Final Exam</a>
                <a href="viewProgress.php">View Progress</a>
                <a href="getCertificate.php">Get Certificate</a>
            <?php else: ?>
                <a href="register.php">Create Account</a>
                <a href="login.php">Login</a>
            <?php endif ?>
        </div>
    </body>
</html>