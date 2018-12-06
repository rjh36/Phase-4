<?php 
    session_start();
    include('sidebar.inc.php');
    include('header.inc.php');
    include('pagination.inc.php'); ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Module 3 - Patches and Antivirus</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="pageTurner.js"></script>
    </head>
    <body>
        <div class="header">
            <h2>Patches and Antivirus</h2>
        </div>
        <div class="content">
            <?php if (isset($_SESSION["username"])): ?>
                <?php include('module3Contents.php'); ?>
                <div class="PageTurner">
                    <button class="btn" id="prev">Previous</button>
                    <button class="btn" id="next">Next</button>
                </div>
            <?php else: ?>
                <p>
                    Error to login. Please retry login.
                </p>
            <?php endif ?>
        </div>
    </body>
</html>