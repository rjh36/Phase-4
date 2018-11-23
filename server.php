<?php include('generateCertificate.php');
     include('manageProgress.php'); 
     include('Config/databaseConstants.php') ?>

<?php
// New Code, function gets the ID of the user from database and returns it.
    function getUserID($db, $username) {
        $query = "SELECT id FROM users WHERE username = '$username'";
        $result = mysqli_query($db, $query);
        $result_info = mysqli_fetch_row($result);
        return $result_info[0];
    }
//

    session_start();
    $username = "";
    $email = "";
    $errors = array();
    //connect to the database
    $db = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE);
    
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
            $sql = "INSERT INTO users (username, email, password)
                        VALUES ('$username', '$email', '$password')";
            mysqli_query($db, $sql);
            $_SESSION['username'] = $username;
        // New code adds the user's id to the session.
        // New code generates a certificate for the user. (to be changed)
        // New code also creates a new entry in the course progress table,
            // in order to keep track of their progress through the course.
            $_SESSION['id'] = getUserID($db, $username);
            createNewProgress($db, $_SESSION['id']);
            createAndStoreCertificate($db);
        //
            $_SESSION['success'] = "You are now logged in";
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
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = mysqli_query($db, $query);
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
            // New code adds the user's id to the session.
                $_SESSION['id'] = getUserID($db, $username);
            //
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php'); //redirect to home page
            }
            else {
                array_push($errors, "wrong username/password combination");
            }
        }
    }
    //logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
    // New code.
        unset($_SESSION['id']);
    //
        header('location: login.php');
    }
?>