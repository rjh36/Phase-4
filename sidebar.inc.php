<!DOCTYPE html>

<html>
    <body>
        <div class="sidebar">
            <?php if (isset($_SESSION["username"])): ?>
                <button class="dropbtn"><?php echo $_SESSION['username'] ?>
                        <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="index.php?logout='l'" style="color: red;">Logout</a>
                </div>

                <a href="index.php">Home</a>
                <a href="module1.php">Phishing and Social Engineering</a>
                <a href="module2.php">Patches and Antivirus</a>
                <a href="module3.php">Password Strength</a>
                <a href="module4.php">Public Wi-Fi Security</a>
                <a href="finalexam.php">Take Final Exam</a>
                <a href="getCertificate.php">Get Certificate</a>
            
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Create Account</a>

            <?php endif ?>
        </div>
    </body>
</html>

<style>
    .sidebar {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    overflow-x: hidden;
    border: none;
    border-left: 2px solid #8DC8E8;
    background-color: #003865;
    }

    .sidebar a {
        padding: 20px;
        color: #8DC8E8;
        text-decoration: none;
        display: block;
    }

    .sidebar a:hover, .dropbtn:hover {
    background-color: #004C97;
    color: #8DC8E8;
    }

    .sidebar button {
        width: 100%;
        font-size: 20px;
        padding: 20px;
        background-color: #003865;
        color: #8DC8E8;
        display: block;
    }

    .sidebar button:hover {
        background-color: #004C97;
        color: #8DC8E8;
    }
</style>

<script>
    var dropdown = document.getElementsByClassName("dropbtn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            
            if (dropdownContent.style.display === "block") {
                dropdownContent.style.display = "none";
            }
            else {
                dropdownContent.style.display = "block";
            }
        });
    }
</script>