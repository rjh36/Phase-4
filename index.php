<?php
    session_start();
    include('sidebar.inc.php');
    include('header.inc.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Registration System</title>
    </head>
    <body onload="dropdown();">
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

                    Our Basic Online Security Course features free, interactive modules that cover concepts in:<br />
                    <li>Recognizing and thwart phishing attacks or social engineering scams</li>
                    <li>Emphasizing the importance of creating a strong, easy-to-remember password</li>
                    <li>Providing tips on how to protect your device and data while using public Wi-Fi</li>
                    <li>Discussing why antivirus software are strongly recommended as well as keeping your devices up to date</li><br /><br />
                    Register or login to begin!<br /><br />
                </p>
            <?php endif ?>
        </div>
    </body>
</html>