<?php include('server.php'); 
    include('sidebar.inc.php');
    include('header.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Final Exam</title>
    </head>
    <body>
        <div class="header">
            <h2>Final Exam</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <?php if (getFinalReadiness($db, $_SESSION["id"])): ?>
                    <?php include('finalExamForm.php'); ?>
                <?php else: ?>
                    <p>
                        You need to complete the rest of the course before the final!
                    </p>
                <?php endif ?>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
    </body>
</html>