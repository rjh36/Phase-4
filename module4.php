<?php 
    session_start();
    include('sidebar.inc.php');
    include('header.inc.php');
    include('pagination.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Module 4 - Public Wi-Fi Security</title>
    </head>
    <body onload="dropdown();">
        <div class="header">
            <h2>Public Wi-Fi Security</h2>
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
    </body>
</html>