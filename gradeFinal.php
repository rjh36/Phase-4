<?php
include('server.php');

/* Gets the answers from the form.*/
$answer1 = $_POST['Q1A'];

/* Grades the final exam.*/
$totalCorrect = 0;
define("TOTALQUESTIONS", 1); // Update number if adding a questions.

// The correct answer for question one is A.
if ($answer1 == "A") { $totalCorrect++; }

// Calculates the results.
$result = $totalCorrect / TOTALQUESTIONS;

/* Determines if the final is passed.*/
if($result == TOTALQUESTIONS) { // Caclulation for passing is done here.
// Updates the database if the final is passed.
    //updateProgressTrue($db, $_SESSION['id'], 'final');

// Displays the results (Passed).
    echo "<div id='result:passed'>You Passed :). Feel free to pick up your certificate!</div>";
    echo "<a href='index.php'>Home</a> <a href='getCertificate.php'>Get Certificate</a>";
}
else {
// Displays the results (Failed).
    echo "<div id='result:failed'>You Failed :(.</div>";
    echo "<a href='index.php'>Home</a>";
}

echo "<br/>";
// Newer stuff.
$numFinalQuestions = 5;

if(isset($_POST['submit'])) {
    
    if(!empty($_POST['answers'])) {
    // Number of questions answered.
        $count = count($_POST['answers']);
        
        echo "Out of '$numFinalQuestions', you answered '$count' questions.";
        
    // Number of questions answered correctly.
        $i = 0;
        $grade = 0;
        $selected = $_POST['answers'];
        
        $get_Q_ans_sql = "SELECT * FROM questions";
        $q_results = mysqli_query($db, $get_Q_ans_sql);
        
        while($row = mysqli_fetch_array($q_results)) {
            $row['correct_answer_id'];
            
            $checked = $rows['correct_answer_id'] == $selected[$i];
            
            if($checked) {
                $grade++;
            }
            
            $i++;
        }
        
        echo "<h3>'$grade' / '$numFinalQuestions'</h3>";
        
    // ToDo: Updates the database if the student passes.
        
    }
}