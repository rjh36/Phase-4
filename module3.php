<?php 
    session_start();
    include('sidebar.inc.php');
    include('header.inc.php');
    include('pagination.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Module 3 - Patches and Antivirus</title>
    </head>
    <body>
        <div class="header">
            <h2>Patches and Antivirus</h2>
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