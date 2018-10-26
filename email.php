<?php include('server.php'); ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Composer generated autoload.php file.
// NEEDS composer.
require 'C:\xampp\composer\vendor\autoload.php';


//Gets the email of the user.
function getEmail($databaseConnection, $username) {
    $email_query = "SELECT email FROM users WHERE username = '$username'";
    $email_query_result = mysqli_query($databaseConnection, $email_query);
    $email_query_info = mysqli_fetch_row($email_query_result);
    return $email_query_info[0];
}

if(isset($_POST['email'])) {
    try {
        $mail = new PHPMailer(TRUE);
        
        $mail->setFrom(getEmail($db, $_SESSION['username']), $_SESSION['username']);

        $mail->addAddress($_POST['email']);

        $mail->Subject = 'Certificate';

        $mail->Body = 'Here is my certificate of completion for the cyber security course.';

        $mail->addAttachment('Templates/CertificateTemplate.pdf', 'CertificateTemplate.pdf');

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