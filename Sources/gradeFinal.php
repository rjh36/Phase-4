<?php
include('server.php');
include('generateCertificate.php');

$numFinalQuestions = NUM_FINAL_QUESTIONS;

if(isset($_POST['submit'])) {
    if(!empty($_POST['answers'])) {
    // Number of questions answered.
        $count = count($_POST['answers']);
        
        echo "Out of $numFinalQuestions, you answered $count questions.";
        
    // Number of questions answered correctly.
        $i = 1;
        $grade = 0;
        $selected = $_POST['answers'];
        
        // Queries the database for the correct answers.
        $correct_A_stmt = $db->prepare("SELECT * FROM answers WHERE correct = TRUE");
        $correct_A_stmt->execute();
        $c_results = $correct_A_stmt->get_result();
        
        while($row = mysqli_fetch_array($c_results)) {
            
            $checked = $row['answer_id'] == $selected[$i];
            
            if($checked) {
                $grade++;
            }
            
            $i++;
        }
        
        echo "<h3>You answered $grade / $numFinalQuestions correct.</h3>";
        
    // Pass/Fail calculation to happen here.
        $final_grade = ($grade / $numFinalQuestions) * 100;
        
        $pass = $final_grade >= 90;
        
    // ToDo: Updates the database if the student passes.
        if($pass) {
            updateProgressTrue($db, $_SESSION['id'], 'final');
            echo "<h3>You passed!  Feel free to collect your certificate!</h3>";
        // Generates a certificate for the user. (to be changed)
            createAndStoreCertificate($db);
            echo "<a href='getCertificate.php'>Get Certificate</a>";
        }
        else {
            echo "<h3>You failed!  Please try again!</h3>";
            echo "<a href='finalExam.php'>Retake Final Exam</a>";
        }
    }
    else {
        echo "<h3>You failed!  You have to answer at least one question!</h3>";
        echo "<a href='finalExam.php'>Retake Final Exam</a>";
    }
}