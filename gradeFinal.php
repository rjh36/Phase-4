<?php
include('server.php');

$numFinalQuestions = 4;

if(isset($_POST['submit'])) {
    if(!empty($_POST['answers'])) {
    // Number of questions answered.
        $count = count($_POST['answers']);
        
        echo "Out of $numFinalQuestions, you answered $count questions.";
        
    // Number of questions answered correctly.
        $i = 1;
        $grade = 0;
        $selected = $_POST['answers'];
        
        $get_Q_ans_sql = "SELECT * FROM questions";
        $q_results = mysqli_query($db, $get_Q_ans_sql);
        
        while($row = mysqli_fetch_array($q_results)) {
            
            $checked = $row['correct_answer_id'] == $selected[$i];
            
            if($checked) {
                $grade++;
            }
            
            $i++;
        }
        
        echo "<h3>You answered $grade / $numFinalQuestions correct.</h3>";
        
    // ToDo: Updates the database if the student passes.
        /*if() {
            updateProgressTrue($db, $_SESSION['id'], 'final');
        }*/
    }
}