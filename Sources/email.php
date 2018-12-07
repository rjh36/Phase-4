<?php include('server.php'); ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Composer generated autoload.php file.
// NEEDS composer.
require 'C:\xampp\composer\vendor\autoload.php';


//Gets the email of the user.
function getEmail($databaseConnection, $username) {
    $E_stmt = $databaseConnection->prepare("SELECT email FROM users WHERE username = ?");
    $E_stmt->bind_param("s", $username);
    $E_stmt->execute();
    $E_result = $E_stmt->get_result();
    $E_info = mysqli_fetch_row($E_result);
    return $E_info[0];
}

if(isset($_POST['email'])) {
    try {
        $mail = new PHPMailer(TRUE);
        
        $mail->setFrom(getEmail($db, $_SESSION['username']), $_SESSION['username']);

        $mail->addAddress($_POST['email']);

        $mail->Subject = 'Certificate';

        $mail->Body = 'Here is my certificate of completion for the cyber security course.';
        
        $filename = getFilename($db, $_SESSION['id']);
        
        $mail->addAttachment('Certificates/'.$filename, $filename);

        $mail->send();
    }
    catch (Exception $exception)
    {
        echo $exception->errorMessage();
    }
    catch (\Exception $exception)
    {
        echo $exception->getMessage();
    }
}