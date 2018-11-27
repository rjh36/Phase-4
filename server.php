<?php include('generateCertificate.php');
     include('manageProgress.php'); 
     include('Config/databaseConstants.php') ?>

<?php
// Function gets the ID of the user from database and returns it.
    function getUserID($db, $username) {
        $ID_stmt = $db->prepare("SELECT id FROM users WHERE username = ?");
        $ID_stmt->bind_param("s", $username);
        $ID_stmt->execute();
        $ID_result = $ID_stmt->get_result();
        $ID_info = mysqli_fetch_row($ID_result);
        return $ID_info[0];
    }

    session_start();
    $username = "";
    $email = "";
    $errors = array();
    //connect to the database
    $db = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    // Sets up interactions with the database.
    
    
    //if the register button is clicked
    if (isset($_POST['register'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        
        //ensure that form fields are filled out properly
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($email)) {
            array_push($errors, "Email address is required");
        }
        if (empty($password_1)) {
            array_push($errors, "Password is required");
        }
        if ($password_1 != $password_2) {
            array_push($errors, "Passwords do not match");
        }
        
        //if there are no errors, save user to database
        if (count($errors) == 0) {
            $password = md5($password_1); //encrypt password
            
            $reg_stmt = $db->prepare("INSERT INTO users (username, email, password)
                        VALUES (?, ?, ?)");
            $reg_stmt->bind_param("sss", $username, $email, $password);
            $reg_stmt->execute();
            
            $_SESSION['username'] = $username;
        // Adds the user's id to the session.
            $_SESSION['id'] = getUserID($db, $username);
            $_SESSION['success'] = "You are now logged in";
            
        // New entry in the progress table, in order to keep track of progress through the course.
            createNewProgress($db, $_SESSION['id']);
        // Generates a certificate for the user. (to be changed)
            createAndStoreCertificate($db);
            
            header('location: index.php'); //redirect to home page
        }
    }
    //login
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        } 
        if (count($errors) == 0) {
            $password = md5($password); // Update encryption method.
            
            $log_stmt = $db->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
            $log_stmt->bind_param("ss", $username, $password);
            $log_stmt->execute();
            
            $result = $log_stmt->get_result();
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
            // Adds the user's id to the session.
                $_SESSION['id'] = getUserID($db, $username);
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); //redirect to home page
            }
            else {
                array_push($errors, "wrong username/password combination");
            }
        }
    }
?>