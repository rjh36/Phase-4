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
}
else {
// Displays the results (Failed).
    echo "<div id='result:failed'>You Failed :(.</div>";
}
