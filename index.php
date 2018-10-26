<?php include('server.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>User Registration System</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="header">
            <h2>Welcome to Cyber Security Training 2.0</h2>
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
                    Select a module to begin.<br /><br />
                </p>
            <?php else: ?>
                <p>
                    As use of the internet becomes more and more prevalent in our lives, so does the likelihood of becoming a victim to a wide array of cybercrimes.<br /><br />

                    Last year, cybercriminals stole <a href="https://www.iii.org/fact-statistic/facts-statistics-identity-theft-and-cybercrime" style="color: #009CDE;text-decoration: none">billions</a> of dollars from consumers. Research shows these criminals will have cost businesses over $2 <a href="https://www.juniperresearch.com/press/press-releases/cybercrime-cost-businesses-over-2trillion" style="color: #009CDE;text-decoration: none">trillion</a> globally by 2019.<br /><br />

                    Cybercrime is an existing problem with an unforseeable end. Prevention starts with us taking the necessary precautions and protect ourselves by reducing vulnerability.<br /><br />

                    Our Cyber Security Training 2.0 features free, interactive courses that cover concepts in:<br />
                    <li>Recognizing and thwart phishing attacks or social engineering scams</li>
                    <li>Emphasizing the importance of creating a strong, easy-to-remember password</li>
                    <li>Providing tips on how to protect your device and data while using public Wi-Fi</li>
                    <li>Discussing why antivirus software are strongly recommended as well as keeping your devices up to date</li><br /><br />
                    Register or login to begin!<br /><br />
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

<script>
    var dropdown = document.getElementsByClassName("dropbtn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>