<?php include('server.php'); 
    include('sidebar.inc.php');
    include('header.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Final Exam</title>
    </head>
    <body onload="dropdown();">
        <div class="header">
            <h2>Final Exam</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <?php include('finalExamForm.php'); ?>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
    </body>
</html>