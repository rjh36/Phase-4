<?php include('server.php'); 
    include('sidebar.inc.php');
    include('header.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>View Progress</title>
    </head>
    <body onload="dropdown();">
        <div class="header">
            <h2>Here is where you are in the course!</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <?php
                $currentProgress = getProgress($db, $_SESSION['id']);
                echo "<ul>";
                echo "<li><big>Completed Module 1? </big>".boolToString($currentProgress[1])."</li>";
                echo "<li><big>Completed Module 2? </big>".boolToString($currentProgress[1])."</li>";
                echo "<li><big>Completed Module 3? </big>".boolToString($currentProgress[1])."</li>";
                echo "<li><big>Completed Module 4? </big>".boolToString($currentProgress[1])."</li>";
                echo "<li><big>Completed the Final Exam? </big>".boolToString($currentProgress[1])."</li>";
                echo "</ul>";
                ?>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
    </body>
</html>