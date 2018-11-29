<?php 
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
    
    
// Register
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
        if ($username === $password_1) {
            array_push($errors, "Username and Password cannot be the same");
        }
        if (strlen($password_1) < MIN_PASSWORD_LEN) {
            array_push($errors, "Password must be at least 15 characters");
        }
        
        //if there are no errors, save user to database
        if (count($errors) == 0) {
        //encrypt password
            $password = password_hash($password_1, PASSWORD_DEFAULT);

            $reg_stmt = $db->prepare("INSERT INTO users (username, email, password)
                        VALUES (?, ?, ?)");
            $reg_stmt->bind_param("sss", $username, $email, $password);
            $reg_stmt->execute();

            if($db->errno === 1062) { // Check for uniqueness.
                array_push($errors, "Username must be unique");
            }
            else {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = getUserID($db, $username);
                $_SESSION['success'] = "You are now logged in";

            // New entry in the progress table, in order to track progress through the course.
                createNewProgress($db, $_SESSION['id']);

                header('location: index.php'); //redirect to home page
            }
        }
    }
    
// Login
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
            $log_stmt = $db->prepare("SELECT * FROM users WHERE username = ?");
            $log_stmt->bind_param("s", $username);
            $log_stmt->execute();
            $result = $log_stmt->get_result();
            $result_info = $result->fetch_assoc();
            
            if (password_verify($password, $result_info['password'])) {
                $_SESSION['username'] = $username;
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