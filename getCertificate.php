<?php //include('server.php'); 
    include('sidebar.inc.php');
    include('header.inc.php');
    include('generateCertificate.php');?>
<!DOCTYPE html>

<html>
    <head>
        <title>Get Certificate</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script type="text/javascript" src="formHandling.js"></script>
        <script type="text/javascript">
            $(function () {
                <?php if (isset($_SESSION["username"])): ?>
                    $('.sidebar').append("<button type='button' onmouseup='openForm()'>Email</button>");
                <?php endif ?>
            });
        </script>
    </head>
    <body>
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
        <div class="popup-form" id="EmailForm">
            <!-- method="post" action="email.php" -->
            <form class="form-box">
                <h2>Email Certificate</h2>
                <br/>
                <label for="email"><b>Recipient's Email</b></label>
                <input type="text" placeholder="Please enter the recipient's Email!" name="email" required>
                <br/>
                <button type="submit" class="btn" onclick="closeForm()">Send</button>
                <button class="btn cancel" onmouseup="closeForm()">Close</button>
            </form>
        </div>
    </body>
</html>
