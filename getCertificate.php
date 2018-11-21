<!DOCTYPE html>
<?php include('server.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Get Certificate</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src='dropdown.js'></script>
        <script type="text/javascript">
            function openForm() {
                document.getElementById("EmailForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("EmailForm").style.display = "none";
            }
        </script>
    </head>
    <body onload="dropdown();">
        <div class="header">
            <h2>Congratulations, how do you want your certificate?</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <embed src=<?php echo'Certificates/'.getFilename($db, $_SESSION['id']) ?> width="100%" height="700px" type='application/pdf'>
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
                <button type="button" onmouseup="openForm()">Email</button>
            <?php else: ?>
                <a href="register.php">Create Account</a>
                <a href="login.php">Login</a>
            <?php endif ?>
        </div>
        <div class="popup-form" id="EmailForm">
            <form method="post" action="email.php" class="form-box">
                <h2>Email Certificate</h2>
                <br/>
                <label for="email"><b>Recipient's Email</b></label>
                <input type="text" placeholder="Please enter the recipient's Email!" name="email" required>
                <br/>
                <button type="submit" class="btn">Send</button>
                <button class="btn cancel" onmouseup="closeForm()">Close</button>
            </form>
        </div>
    </body>
</html>
