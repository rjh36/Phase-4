<!DOCTYPE html>
<?php include('server.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Get Certificate</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="header">
            <h2>Congratulations, how do you want your certificate?</h2>
        </div>
        <div class="content">
            <embed src="Templates/CertificateTemplate.pdf" width="100%" height="700px" type='application/pdf'>
        </div>
        <div class="sidebar">
                <a href="index.php?logout='l'">Logout</a>
                <a href="index.php">Home</a>
                <button type="button" id="EmailButton">Email</button>
        </div>
        
        <?php
            // Code?
        ?>
    </body>
</html>
