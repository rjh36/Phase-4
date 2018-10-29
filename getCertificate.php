<!DOCTYPE html>
<?php include('server.php'); ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Get Certificate</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script type="text/javascript">
            function openForm() {
                document.getElementById("EmailForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("EmailForm").style.display = "none";
            }
        </script>
    </head>
    <body>
        <div class="header">
            <h2>Congratulations, how do you want your certificate?</h2>
        </div>
        <div class="content">
            <embed src=<?php echo'Certificates/'.getFilename($db, $_SESSION['id']) ?> width="100%" height="700px" type='application/pdf'>
        </div>
        <div class="sidebar">
                <a href="index.php?logout='l'">Logout</a>
                <a href="index.php">Home</a>
                <button type="button" onmouseup="openForm()">Email</button>
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
